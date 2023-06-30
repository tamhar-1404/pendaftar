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

        //User Siswa
        $siswamagang = [
            [
                'name' => 'Dimas',
                'email' => 'dimas@gmail.com',
                'password' => Hash::make ('12345678'),
                'role' => 'Siswa',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($siswamagang);

        $siswamagang2 = [
            [
                'name' => 'Agung',
                'email' => 'agung@gmail.com',
                'password' => Hash::make ('123456789'),
                'role' => 'Siswa',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($siswamagang2);

        $siswamagang3 = [
            [
                'name' => 'Supri',
                'email' => 'supri@gmail.com',
                'password' => Hash::make ('1234567890'),
                'role' => 'Siswa',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($siswamagang3);
    }
}
