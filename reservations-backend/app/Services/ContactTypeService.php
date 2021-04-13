<?php

namespace App\Services;

use App\Repositories\ContactTypeRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ContactTypeService
{
    /**
     * @var $contactTypeRepository
     */
    protected $contactTypeRepository;

    /**
     * ContactType Service constructor
     *
     * @param ContactTypeRepository $contactTypeRepository
     */
    public function __construct(ContactTypeRepository $contactTypeRepository)
    {
        $this->contactTypeRepository = $contactTypeRepository;
    }

    /**
     * Get All ContactTypes
     *
     * @return String
     */
    public function getAllContactType()
    {
        $result = $this->contactTypeRepository->getAll();

        return $result;
    }

    /**
     * Get ContactType
     *
     * @param $contactType
     * @return String
     */
    public function getContactType($contactType)
    {
        $result = $this->contactTypeRepository->get($contactType);

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
    public function saveContactType($data)
    {
        $validator = Validator::make($data, [
            'description' => 'required'
        ]);

        if($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->contactTypeRepository->save($data);

        return $result;
    }

    /**
     * Validate Post data
     *
     * Store to DB if there are no errors
     *
     * @param array $data
     * @param $contactType
     * @return String
     */
    public function updateContactType($data, $contactType)
    {
        $validator = Validator::make($data, [
            'description' => 'required'
        ]);

        if($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->contactTypeRepository->update($data, $contactType);

        return $result;
    }

    /**
     * Get ContactType
     *
     * @param $contactType
     * @return String
     */
    public function deleteContactType($contactType)
    {
        $result = $this->contactTypeRepository->delete($contactType);

        return $result;
    }

}
