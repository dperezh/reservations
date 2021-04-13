<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                'name' => 'Daniel',
                'phone_number' => '78304753',
                'birth_date' => '1992/03/13',
                'contact_type_id' => 3
            ],
        );
        DB::table('contacts')->insert(
            [
                'name' => 'Karina',
                'phone_number' => '53818470',
                'birth_date' => '1992/04/03',
                'contact_type_id' => 1
            ],
        );
        DB::table('contacts')->insert(
            [
                'name' => 'Nydia',
                'phone_number' => '76915909',
                'birth_date' => '1976/10/30',
                'contact_type_id' => 2
            ],
        );
    }
}
