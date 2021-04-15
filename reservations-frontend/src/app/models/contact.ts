import { ContactType } from './contact-type';

export class Contact {
  id: number;
  name: string;
  phone_number: string;
  birth_date: Date;
  contact_type_id: number;
  contact_type: ContactType;

  constructor() {
    this.name = '';
    this.phone_number = '';
    this.birth_date = null;
    this.contact_type_id = null;
    this.contact_type = new ContactType();
  }
}
