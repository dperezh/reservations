<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    /**
     * Get All Contacts test.
     *
     * @return void
     */
    public function test_get_all_contacts()
    {
        $response = $this->get('/api/contacts');

        $response->assertStatus(200);
    }

    /**
     * Get contact test OK.
     *
     * @return void
     */
    public function test_get_specific_contact_ok()
    {
        $response = $this->get('/api/contacts/1');

        $response
            ->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "name" => "Daniel",
                "phone_number" => "78304753",
                "birth_date" => "1992-03-13",
                "contact_type" => array(
                    "id" => 3,
                    "description" => "External contact"
                )
            ]);
    }

     /**
     * Get contact test FAIL.
     *
     * @return void
     */
    public function test_get_specific_contact_fail()
    {
        $response = $this->get('/api/contacts/9');

        $response->assertStatus(404);
    }

    /**
     * Create contact.
     *
     * @return void
     */
    public function test_create_contact()
    {
        $response = $this->postJson('/api/contacts', [
            "name" => "Marlon",
            "phone_number" => "78304753",
            "birth_date" => "2004/10/10",
            "contact_type_id" => 1
        ]);

        $response->assertStatus(201);
    }

    /**
     * Update contact.
     *
     * @return void
     */
    public function test_update_contact()
    {
        $response = $this->putJson('/api/contacts/3', [
            "name" => "Daniel",
            "phone_number" => "78304753",
            "birth_date" => "2004/10/10",
            "contact_type_id" => 1
        ]);

        $response->assertStatus(204);
    }
}
