<?php

namespace App\Repositories;

use App\Models\Reservation;

class ReservationRepository
{
    /**
     * @var $reservation
     */
    protected $reservation;

    /**
     * Reservation Repository constructor
     *
     * @param ConstactType $reservation
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get All Reservations
     *
     * @return Reservation
     */
    public function getAll()
    {
        return Reservation::with('contact.contactType')->get();
    }

    /**
     * Get Reservation
     *
     * @param $reservation
     * @return Reservation
     */
    public function get($reservation)
    {
        return Reservation::with('contact.contactType')->find($reservation->id);
    }

    /**
     * Save Reservation
     *
     * @param $data
     * @return Reservation
     */
    public function save($data)
    {
        $reservation = new $this->reservation;

        $reservation->date = $data['date'];
        $reservation->ranking = $data['ranking'];
        $reservation->favorite = $data['favorite'];
        $reservation->contact_id = $data['contact_id'];

        $reservation->save();

        return $reservation->fresh();
    }

    /**
     * Update Reservation
     *
     * @param $data
     * @param Reservation $reservation
     * @return Reservation
     */
    public function update($data, $reservation)
    {
        $reservation->date = $data['date'];
        $reservation->ranking = $data['ranking'];
        $reservation->favorite = $data['favorite'];
        $reservation->contact_id = $data['contact_id'];

        $reservation->save();

        return $reservation;
    }

    /**
     * Delete Reservation
     *
     * @param $reservation
     * @return Reservation
     */
    public function delete($reservation)
    {
        return $reservation->delete();
    }
}
