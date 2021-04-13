<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_types')->insert(
            [
                'description' => 'Customer contact',
            ],
        );
        DB::table('contact_types')->insert(
            [
                'description' => 'Favorite customer contact',
            ],
        );
        DB::table('contact_types')->insert(
            [
                'description' => 'External contact',
            ],
        );
    }
}
