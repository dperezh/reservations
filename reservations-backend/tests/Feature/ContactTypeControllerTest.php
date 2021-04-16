<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactTypeControllerTest extends TestCase
{
    /**
     * Get All Contact Types test.
     *
     * @return void
     */
    public function test_get_all_contact_types()
    {
        $response = $this->get('/api/contactTypes');

        $response->assertStatus(200);
    }

    /**
     * Get All Contact Types test.
     *
     * @return void
     */
    public function test_get_specific_contact_type()
    {
        $response = $this->get('/api/contactTypes/2');

        $response
            ->assertStatus(200)
            ->assertJson([
                "id" => 2,
                "description" => "Favorite customer contact"
            ]);
    }
}
