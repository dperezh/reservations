<?php

namespace App\Services;

use App\Repositories\ReservationRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ReservationService
{
    /**
     * @var $reservationRepository
     */
    protected $reservationRepository;

    /**
     * Reservation Service constructor
     *
     * @param ReservationRepository $reservationRepository
     */
    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    /**
     * Get All Reservations
     *
     * @return String
     */
    public function getAllReservation()
    {
        $result = $this->reservationRepository->getAll();

        return $result;
    }

    /**
     * Get Reservation
     *
     * @param $reservation
     * @return String
     */
    public function getReservation($reservation)
    {
        $result = $this->reservationRepository->get($reservation);

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
    public function saveReservation($data)
    {
        $validator = Validator::make($data, [
            'date' => 'required',
            'ranking' => 'required',
            'favorite' => 'required'
        ]);

        if($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->reservationRepository->save($data);

        return $result;
    }

    /**
     * Validate Post data
     *
     * Store to DB if there are no errors
     *
     * @param array $data
     * @param $reservation
     * @return String
     */
    public function updateReservation($data, $reservation)
    {
        $validator = Validator::make($data, [
            'date' => 'required',
            'ranking' => 'required',
            'favorite' => 'required'
        ]);

        if($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->reservationRepository->update($data, $reservation);

        return $result;
    }

    /**
     * Get Reservation
     *
     * @param $reservation
     * @return String
     */
    public function deleteReservation($reservation)
    {
        $result = $this->reservationRepository->delete($reservation);

        return $result;
    }

}
