<?php

namespace Database\Seeders;

use App\Models\SubCriteria;
use Illuminate\Database\Seeder;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCriteria::create([
            'code' => 'KS001',
            'name' => 'Lantai',
            'nilaik' => '1',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS002',
            'name' => 'Lantai',
            'nilaik' => '2',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS003',
            'name' => 'Lantai',
            'nilaik' => '3',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS004',
            'name' => 'Kamar',
            'nilaik' => '1',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS005',
            'name' => 'Kamar',
            'nilaik' => '2',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS006',
            'name' => 'Kamar',
            'nilaik' => '3',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS007',
            'name' => 'Luas',
            'nilaik' => '150',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS008',
            'name' => 'Luas',
            'nilaik' => '200',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS009',
            'name' => 'Luas',
            'nilaik' => '300',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0010',
            'name' => 'Harga',
            'nilaik' => '1000000000',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0011',
            'name' => 'Harga',
            'nilaik' => '1500000000',
            'nilaib' => '2',
        ]);
        SubCriteria::create([
            'code' => 'KS0012',
            'name' => 'Harga',
            'nilaik' => '2000000000',
            'nilaib' => '3',
        ]);
        SubCriteria::create([
            'code' => 'KS0013',
            'name' => 'Garasi',
            'nilaik' => 'Tidak ada',
            'nilaib' => '1',
        ]);
        SubCriteria::create([
            'code' => 'KS0014',
            'name' => 'Garasi',
            'nilaik' => 'Ada',
            'nilaib' => '2',
        ]);
    }
}
