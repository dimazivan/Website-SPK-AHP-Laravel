<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Criteria::create([
            'code' => 'K001',
            'name' => 'Lantai'
        ]);
        Criteria::create([
            'code' => 'K002',
            'name' => 'Kamar'
        ]);
        Criteria::create([
            'code' => 'K003',
            'name' => 'Luas'
        ]);
        Criteria::create([
            'code' => 'K004',
            'name' => 'Harga'
        ]);
        Criteria::create([
            'code' => 'K005',
            'name' => 'Garasi'
        ]);
    }
}
