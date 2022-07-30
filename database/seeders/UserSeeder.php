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
            'name' => 'Dimaz Ivan Perdana',
            'role' => 'Admin',
            'email' => 'dimazivan740@gmail.com',
            'password' => Hash::make('dimazivan'),
        ]);
        User::create([
            'name' => 'Putu Ayu Amalia Indriani',
            'role' => 'Admin',
            'email' => 'putuayu@gmail.com',
            'password' => Hash::make('amaliaindriani'),
        ]);
        User::create([
            'name' => 'Eka Hirinda Zulfa',
            'role' => 'Admin',
            'email' => 'ekahirinda@gmail.com',
            'password' => Hash::make('ekahirinda'),
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
