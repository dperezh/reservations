<?php

namespace App\Repositories;

use App\Models\ContactType;

class ContactTypeRepository
{
    /**
     * @var $contactType
     */
    protected $contactType;

    /**
     * ContactType Repository constructor
     *
     * @param ConstactType $contactType
     */
    public function __construct(ContactType $contactType)
    {
        $this->contactType = $contactType;
    }

    /**
     * Get All ContactTypes
     *
     * @return ContactType
     */
    public function getAll()
    {
        return ContactType::all();
    }

    /**
     * Get ContactType
     *
     * @param $contactType
     * @return ContactType
     */
    public function get($contactType)
    {
        return $contactType;
    }

    /**
     * Save ContactType
     *
     * @param $data
     * @return ContactType
     */
    public function save($data)
    {
        $contactType = new $this->contactType;

        $contactType->description = $data['description'];

        $contactType->save();

        return $contactType->fresh();
    }

    /**
     * Update ContactType
     *
     * @param $data
     * @param ContactType $contactType
     * @return ContactType
     */
    public function update($data, $contactType)
    {
        $contactType->description = $data['description'];

        $contactType->save();

        return $contactType;
    }

    /**
     * Delete ContactType
     *
     * @param $contactType
     * @return ContactType
     */
    public function delete($contactType)
    {
        return $contactType->delete();
    }
}
