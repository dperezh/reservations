import { Contact } from './contact';

export class Reservation {
  id: number;
  description: string;
  date: Date;
  favorite: boolean;
  ranking: number;
  contact_id: number;
  contact: Contact;

  constructor() {
    this.description = '';
    this.date = null;
    this.favorite = false;
    this.ranking = 1;
    this.contact_id = null;
    this.contact = new Contact();
  }
}
