<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $user = User::create([
            'avatar'        => '',
            'name'        => 'Admin',
            'phone_number'         => '790000000',
            'birth_date'         => '1993-04-10',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('12345678'),
        ]);
    }
}
