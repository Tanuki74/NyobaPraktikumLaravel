<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\provinsi;

class dataProvinsi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        provinsi::create([
            'nama_provinsi' => 'Aceh',
            'kode_provinsi' => 11,
        ]);
    }
}
