<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert($this->data());
    }

    private function data()
    {
        return [
            ['id' => 1, 'name' => 'testuser', 'introduction' => 'よろしくお願いします', 'email' => 'user@test.com', 'email_verified_at' => now(), 'password' => \Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
        ];
    }
}
