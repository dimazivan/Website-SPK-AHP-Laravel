<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'Customer Coba 01',
            'role' => 'Customer',
            'email' => 'cust01@gmail.com',
            'password' => Hash::make('customer'),
        ]);
        User::create([
            'name' => 'Customer Coba 02',
            'role' => 'Customer',
            'email' => 'cust02@gmail.com',
            'password' => Hash::make('customer'),
        ]);
    }
}
