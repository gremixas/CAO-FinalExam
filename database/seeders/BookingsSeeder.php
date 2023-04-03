<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert(
            [
                [
                    'user_id' => 2,
                    'car_id' => 1,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'user_id' => 2,
                    'car_id' => 2,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'user_id' => 2,
                    'car_id' => 3,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'user_id' => 2,
                    'car_id' => 4,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'user_id' => 2,
                    'car_id' => 5,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'user_id' => 2,
                    'car_id' => 6,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'user_id' => 2,
                    'car_id' => 7,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'user_id' => 2,
                    'car_id' => 8,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
            ]
        );
    }
}
