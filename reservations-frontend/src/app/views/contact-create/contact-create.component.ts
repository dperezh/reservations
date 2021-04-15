import { Component, OnInit } from '@angular/core';
import { Contact } from '../../models/contact';
import { ContactType } from '../../models/contact-type';
import { ContactService } from '../../services/contact.service';
import { ActivatedRoute, Router } from '@angular/router';
import { MessageService } from 'primeng/api';

@Component({
  selector: 'app-contact-create',
  templateUrl: './contact-create.component.html',
  styleUrls: ['./contact-create.component.scss']
})
export class ContactCreateComponent implements OnInit {

  description = 'On this page you can create new customer contacts to associate them with the different reservations as appropriate';

  contact: Contact;
  contactTypes: ContactType[];

  constructor(
    private contactService: ContactService,
    private router: Router,
    private activatedRoute: ActivatedRoute,
    private messageService: MessageService
  ) { }

  ngOnInit(): void {
    if (this.activatedRoute.snapshot.queryParamMap.get('id')){
      this.contactService.getContact(this.activatedRoute.snapshot.queryParamMap.get('id')).subscribe( response => {
        const {birth_date, ...rest} = response;
        this.contact = {...rest, birth_date: new Date(birth_date)};
      });
    }else {
      this.contact = new Contact();
    }

    this.contactService.getContactTypes().subscribe( (res) => {
      this.contactTypes = res;
    });
  }

  saveContact(): void {
    if (this.activatedRoute.snapshot.queryParamMap.get('id')){
      this.contact.contact_type_id = this.contact.contact_type.id;
      this.contactService.updateContact(this.contact).subscribe( () => {
        this.router.navigate(['../contacts']);
        this.messageService.add({severity: 'success', summary: 'Update', detail: 'Contact updated'});
      });
    }else {
      this.contact.contact_type_id = this.contact.contact_type.id;
      this.contactService.createContact(this.contact).subscribe( () => {
        this.router.navigate(['../contacts']);
        this.messageService.add({severity: 'success', summary: 'Create', detail: 'Contact created'});
      });
    }
  }

}
