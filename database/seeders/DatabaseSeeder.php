<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //User Admin
        $admindudi = [
            [
                'name' => 'Hummasoft Technology',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('123456789'),
                'role' => 'Admin',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($admindudi);
    }
}
