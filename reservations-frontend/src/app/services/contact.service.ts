import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { ContactType } from '../models/contact-type';
import { Contact } from '../models/contact';

@Injectable({
  providedIn: 'root'
})
export class ContactService {

  constructor(private http: HttpClient) { }

  /**
   * Get All contact types
   * @returns ContactType[]
   */
  public getContactTypes(): Observable<ContactType[]> {
    return this.http.get<ContactType[]>('http://localhost:8080/api/contactTypes');
  }

  /**
   * Get All contacts
   * @returns Contact[]
   */
  public getContacts(): Observable<Contact[]> {
    return this.http.get<Contact[]>('http://localhost:8080/api/contacts');
  }

  /**
   * Get contact
   * @returns Contact
   */
   public getContact(id: string): Observable<Contact> {
    return this.http.get<Contact>(`http://localhost:8080/api/contacts/${id}`);
  }

  /**
   * Update contact
   * @returns Contact
   */
   public updateContact(contact: Contact): Observable<Contact> {
    return this.http.put<Contact>(`http://localhost:8080/api/contacts/${contact.id}`, contact);
  }

  /**
   * Create contact
   * @returns Contact
   */
   public createContact(contact: Contact): Observable<Contact> {
    return this.http.post<Contact>('http://localhost:8080/api/contacts', contact);
  }

  /**
   * Delete contact
   */
   public deleteContact(contact: Contact): Observable<any> {
    return this.http.delete(`http://localhost:8080/api/contacts/${contact.id}`);
  }
}
