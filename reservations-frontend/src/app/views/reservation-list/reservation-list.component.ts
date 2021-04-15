import { Component, OnInit } from '@angular/core';
import { ReservationService } from '../../services/reservation.service';
import { Router } from '@angular/router';
import { Reservation } from 'src/app/models/reservation';

@Component({
  selector: 'app-reservation-list',
  templateUrl: './reservation-list.component.html',
  styleUrls: ['./reservation-list.component.scss']
})
export class ReservationListComponent implements OnInit {

  description =
    'On this page you can see the reservations created so far, you also have the possibility to edit a reservation you want, designate if you have a favorite reservation or evaluate any';

  reservations: Reservation[] = [];

  constructor(
    private reservationService: ReservationService,
    private router: Router,
  ) { }

  ngOnInit(): void {
    this.reservationService.getReservations().subscribe((res) => {
      this.reservations = res;
    });
  }

  editReservation(reservation): void {
    this.router.navigate(['../create-reservation'], { queryParams: {
      id: reservation.id
    }});
  }

  updateReservation(reservation: Reservation): void {
    reservation.contact_id = reservation.contact.id;
    this.reservationService.updateReservation(reservation).subscribe();
  }

  updateFavorite(reservation: Reservation): void {
    reservation.favorite = !reservation.favorite;
    this.updateReservation(reservation);
  }

}
