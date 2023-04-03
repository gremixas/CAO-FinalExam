<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.lt',
                'password' => '$2y$10$c.gpjm6gYz2Tw6lN16aEy.zfFUJYoGITW1hbry633R/b5ASyFW.bm',
                'is_admin' => '1',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'User',
                'email' => 'user@user.lt',
                'password' => '$2y$10$t4LVzkyRvUygvhluvgcYyuJ3VKq6SBUrvzWdlQkiIIXRw92JPEi4q',
                'is_admin' => '0',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
