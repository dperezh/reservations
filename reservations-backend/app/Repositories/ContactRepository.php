<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{
    /**
     * @var $contact
     */
    protected $contact;

    /**
     * Contact Repository constructor
     *
     * @param ConstactType $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get All Contacts
     *
     * @return Contact
     */
    public function getAll()
    {
        return Contact::with('contactType')->get();
    }

    /**
     * Get Contact
     *
     * @param $contact
     * @return Contact
     */
    public function get($contact)
    {
        return Contact::with('contactType')->find($contact->id);
    }

    /**
     * Save Contact
     *
     * @param $data
     * @return Contact
     */
    public function save($data)
    {
        $contact = new $this->contact;

        $contact->name = $data['name'];
        $contact->phone_number = $data['phone_number'];
        $contact->birth_date = $data['birth_date'];
        $contact->contact_type_id = $data['contact_type_id'];

        $contact->save();

        return $contact->fresh();
    }

    /**
     * Update Contact
     *
     * @param $data
     * @param Contact $contact
     * @return Contact
     */
    public function update($data, $contact)
    {
        $contact->name = $data['name'];
        $contact->phone_number = $data['phone_number'];
        $contact->birth_date = $data['birth_date'];
        $contact->contact_type_id = $data['contact_type_id'];

        $contact->save();

        return $contact;
    }

    /**
     * Delete Contact
     *
     * @param $contact
     * @return Contact
     */
    public function delete($contact)
    {
        return $contact->delete();
    }
}
