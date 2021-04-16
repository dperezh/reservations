<?php

namespace Tests\Feature;

use Tests\TestCase;

class ReservationControllerTest extends TestCase
{
    /**
     * Get All reservations test.
     *
     * @return void
     */
    public function test_get_all_reservations()
    {
        $response = $this->get('/api/reservations');

        $response->assertStatus(200);
    }

    /**
     * Get reservation test.
     *
     * @return void
     */
    public function test_get_specific_reservation()
    {
        $response = $this->get('/api/reservations/7');

        $response
            ->assertStatus(200)
            ->assertJson([
                "id" => 7,
                "description" => "Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.",
                "date" => "2021-03-05",
                "ranking" => 5,
                "favorite" => 1,
                "contact" => array(
                    "id" => 2,
                    "name" => "Karina",
                    "phone_number" => "53818470",
                    "birth_date" => "1992-04-03",
                    "contact_type" => array(
                        "id" => 1,
                        "description" => "Customer contact"
                    )
                )
            ]);
    }

    /**
     * Delete reservation FAIL.
     *
     * @return void
     */
    public function test_delete_reservation_fail()
    {
        $response = $this->delete('/api/reservations/15');

        $response->assertStatus(404);
    }

}
