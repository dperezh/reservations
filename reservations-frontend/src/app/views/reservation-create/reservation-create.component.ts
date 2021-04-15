import { Component, OnInit } from '@angular/core';
import { Reservation } from '../../models/reservation';
import { ContactService } from '../../services/contact.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Contact } from '../../models/contact';
import { ReservationService } from '../../services/reservation.service';
import { MessageService } from 'primeng/api';

@Component({
  selector: 'app-reservation-create',
  templateUrl: './reservation-create.component.html',
  styleUrls: ['./reservation-create.component.scss']
})
export class ReservationCreateComponent implements OnInit {

  description =
    'On this page you can create new reservations and associate them with a specific client, in any case the favorite and rating values ​​will be inserted by default, these values ​​can be changed on the previous page.';

  reservation: Reservation;
  contacts: Contact[];
  selectedContact: Contact;

  constructor(
    private contactService: ContactService,
    private reservationService: ReservationService,
    private router: Router,
    private activatedRoute: ActivatedRoute,
    private messageService: MessageService
  ) { }

  ngOnInit(): void {
    if (this.activatedRoute.snapshot.queryParamMap.get('id')){
      this.reservationService.getReservation(this.activatedRoute.snapshot.queryParamMap.get('id')).subscribe( response => {
        const {date, ...rest} = response;
        this.reservation = {...rest, date: new Date(date)};
      });
    }else {
      this.reservation = new Reservation();
    }

    this.contactService.getContacts().subscribe( (res) => {
      this.contacts = res;
    });
  }

  saveReservation(): void {
    if (this.activatedRoute.snapshot.queryParamMap.get('id')){
      this.reservation.contact_id = this.reservation.contact.id;
      this.reservation.date = new Date(this.reservation.date);
      this.reservationService.updateReservation(this.reservation).subscribe( () => {
        this.router.navigate([`../reservations`]);
        this.messageService.add({severity: 'success', summary: 'Success', detail: 'Reservation updated'});
      });
    }else {
      this.reservation.contact_id = this.reservation.contact.id;
      this.reservationService.createReservation(this.reservation).subscribe( () => {
        this.router.navigate([`../reservations`]);
        this.messageService.add({severity: 'success', summary: 'Success', detail: 'Reservation created'});
      });
    }
  }

}
