<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'johndoe@admin.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user2 = new User();
        $user2->name = 'Jane Doe';
        $user2->email = 'janedoe@admin.com';
        $user2->password = Hash::make('123456');
        $user2->save();
        
        /* Use this user as a general guest user for all front end calls, seed on first DB:seed or later if needed */
        // $user3 = new User();
        // $user3->name = 'General User';
        // $user3->email = 'generaluser@user.com';
        // $user3->password = Hash::make('123456');
        // $user3->save();
    }
}
