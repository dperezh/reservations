import { Component, OnInit } from '@angular/core';
import { Contact } from 'src/app/models/contact';
import { ContactService } from '../../services/contact.service';
import { Router } from '@angular/router';
import { MessageService } from 'primeng/api';

@Component({
  selector: 'app-contact-list',
  templateUrl: './contact-list.component.html',
  styleUrls: ['./contact-list.component.scss']
})
export class ContactListComponent implements OnInit {

  description = 'On this page you can review all existing contacts in the application, which you can associate with a reservation';

  contacts: Contact[];
  message: any;

  constructor(
    private contactService: ContactService,
    private router: Router,
    private messageService: MessageService
  ) { }

  ngOnInit(): void {
    this.contactService.getContacts().subscribe( (res) => {
      this.contacts = res;
    });
  }

  editContact(contact: Contact): void {
    this.router.navigate(['../create-contact'], { queryParams: {
      id: contact.id
    }});
  }

  deleteContact(contact: Contact): void {
    this.contactService.deleteContact(contact).subscribe(() => {
      const index = this.contacts.indexOf(contact);
      this.contacts.splice(index, 1);
      this.messageService.add({severity: 'success', summary: 'Success', detail: 'Contact deleted'});
    });
  }

}
