<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_images')->insert(
            [
                [
                    'name' => 'v6miata.jpg',
                    'car_id' => 1,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'miata.png',
                    'car_id' => 2,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'viper.png',
                    'car_id' => 3,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'bmwm5.jpg',
                    'car_id' => 4,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'v6miata.jpg',
                    'car_id' => 5,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'miata.png',
                    'car_id' => 6,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'viper.png',
                    'car_id' => 7,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'bmwm5.jpg',
                    'car_id' => 8,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'v6miata.jpg',
                    'car_id' => 9,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'miata.png',
                    'car_id' => 10,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'viper.png',
                    'car_id' => 11,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'bmwm5.jpg',
                    'car_id' => 12,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'v6miata.jpg',
                    'car_id' => 13,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'miata.png',
                    'car_id' => 14,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'viper.png',
                    'car_id' => 15,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'bmwm5.jpg',
                    'car_id' => 16,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'v6miata.jpg',
                    'car_id' => 17,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'miata.png',
                    'car_id' => 18,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'viper.png',
                    'car_id' => 19,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
                [
                    'name' => 'bmwm5.jpg',
                    'car_id' => 20,
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),
                ],
            ]
        );
    }
}
