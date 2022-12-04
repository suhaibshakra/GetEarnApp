<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
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
        // admin seed
        $admin = User::create([
            'avatar'        => '',
            'name'        => 'Admin',
            'phone_number'         => '796560791',
            'birth_date'         => '1993-04-10',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('12345678'),
        ]);

        $role_admin = Role::create([
            'name'         => 'admin',
            'description'  => 'Admin Role',
        ]);

      
        $admin->roles()->save($role_admin);

        $role_user =  Role::create([
            'name'        => 'user',
            'description' => 'User Role',
        ]);


        for ($i=0; $i < 5; $i++) { 
            $master_user = User::create([
                'avatar'        => '',
                'name'        => 'user ' . $i,
                'phone_number'         => '77000000' . $i,
                'birth_date'         => '1993-04-10',
                'email'             => $i.'user@user.com',
                'referred_by'             => $admin->id,
                'password'          => Hash::make('12345678'),
            ]);
            $master_user->roles()->save($role_user);
            for ($x=0; $x < 2; $x++) { 
                $user = User::create([
                    'avatar'        => '',
                    'name'        => 'user ' . $i.$x,
                    'phone_number'      => '7800000' . $i.$x,
                    'birth_date'        => '1993-04-10',
                    'email'             =>  $i . $x .'user@user.com',
                    'referred_by'       => $master_user->id,
                    'password'          => Hash::make('12345678'),
                ]);
                $user->roles()->save($role_user);
            }
        }

        
    }
}
