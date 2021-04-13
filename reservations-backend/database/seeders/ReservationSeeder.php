<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert(
            [
                'date' => '2021/01/23',
                'ranking' => 3,
                'favorite' => true,
                'contact_id' => 3
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/02/18',
                'ranking' => 2,
                'favorite' => false,
                'contact_id' => 1
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
    }
}
