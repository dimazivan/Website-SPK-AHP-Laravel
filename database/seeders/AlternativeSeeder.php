<?php

namespace Database\Seeders;
use App\Models\Alternative;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternative::create([
            'tipe' => 'R001',
            'lantai' => 'Jl. Kebon Raya No. 01',
            'kamar' => 'Perumahan',
            'luas' => '1000',
            'harga' => '100000000',
            'garasi' => 'Lengkap',
            'keterangan' => 'Lain-lain',
            'gambar' => '',
        ]);
    }
}
