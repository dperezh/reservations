import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";
import { Reservation } from '../models/reservation';
import { environment } from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class ReservationService {

  constructor(private http: HttpClient) { }

  /**
   * Get All reservations
   * @returns Reservation[]
   */
  public getReservations(): Observable<Reservation[]> {
    return this.http.get<Reservation[]>(`${environment.API_URL}/api/reservations`);
  }

  /**
   * Get reservation
   * @returns Reservation
   */
  public getReservation(id: string): Observable<Reservation> {
    return this.http.get<Reservation>(`${environment.API_URL}/api/reservations/${id}`);
  }

  /**
   * Update reservation
   * @returns Reservation
   */
  public updateReservation(reservation: Reservation): Observable<Reservation> {
    return this.http.put<Reservation>(`${environment.API_URL}/api/reservations/${reservation.id}`, reservation);
  }

  /**
   * Create reservation
   * @returns Reservation
   */
   public createReservation(reservation: Reservation): Observable<Reservation> {
    return this.http.post<Reservation>(`${environment.API_URL}/api/reservations`, reservation);
  }
}
