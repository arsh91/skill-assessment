<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User as User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     "name" => "admin",
        //     "email" => "admin@admin.com",
        //     "password" => "password"
        // ]);

        User::create([ "name" => "test1", 'email' => 'test1@gmail.com', 'password' => Hash::make('123456')]);
    }
}