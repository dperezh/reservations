import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";
import { Reservation } from '../models/reservation';

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
    return this.http.get<Reservation[]>('http://localhost:8080/api/reservations');
  }

  /**
   * Get reservation
   * @returns Reservation
   */
  public getReservation(id: string): Observable<Reservation> {
    return this.http.get<Reservation>(`http://localhost:8080/api/reservations/${id}`);
  }

  /**
   * Update reservation
   * @returns Reservation
   */
  public updateReservation(reservation: Reservation): Observable<Reservation> {
    return this.http.put<Reservation>(`http://localhost:8080/api/reservations/${reservation.id}`, reservation);
  }

  /**
   * Create reservation
   * @returns Reservation
   */
   public createReservation(reservation: Reservation): Observable<Reservation> {
    return this.http.post<Reservation>('http://localhost:8080/api/reservations', reservation);
  }
}
