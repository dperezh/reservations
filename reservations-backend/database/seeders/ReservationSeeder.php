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
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 3,
                'favorite' => true,
                'contact_id' => 3
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/02/18',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 2,
                'favorite' => false,
                'contact_id' => 1
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
        DB::table('reservations')->insert(
            [
                'date' => '2021/03/05',
                'description' => 'Reservation for four people at the Gran Hotel Packard, includes lunch and dinner, in the evening there will be a recreational activity where participation games are included.',
                'ranking' => 5,
                'favorite' => true,
                'contact_id' => 2
            ],
        );
    }
}
