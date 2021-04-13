<?php

namespace App\Services;

use App\Repositories\ContactRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ContactService
{
    /**
     * @var $contactRepository
     */
    protected $contactRepository;

    /**
     * Contact Service constructor
     *
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Get All Contacts
     *
     * @return String
     */
    public function getAllContact()
    {
        $result = $this->contactRepository->getAll();

        return $result;
    }

    /**
     * Get Contact
     *
     * @param $contact
     * @return String
     */
    public function getContact($contact)
    {
        $result = $this->contactRepository->get($contact);

        return $result;
    }


    /**
     * Validate Post data
     *
     * Store to DB if there are no errors
     *
     * @param array $data
     * @return String
     */
    public function saveContact($data)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'birth_date' => 'required'
        ]);

        if($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->contactRepository->save($data);

        return $result;
    }

    /**
     * Validate Post data
     *
     * Store to DB if there are no errors
     *
     * @param array $data
     * @param $contact
     * @return String
     */
    public function updateContact($data, $contact)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'birth_date' => 'required'
        ]);

        if($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->contactRepository->update($data, $contact);

        return $result;
    }

    /**
     * Get Contact
     *
     * @param $contact
     * @return String
     */
    public function deleteContact($contact)
    {
        $result = $this->contactRepository->delete($contact);

        return $result;
    }

}
