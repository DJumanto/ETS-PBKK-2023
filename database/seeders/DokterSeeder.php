<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Dokter')->insert([
            [
                'nama' => 'Dr. Andi',
                'spesialis' => 'Dokter Umum',
                'created_at' => now(),
                'updated_at'=> now(),
            ],
            [
                'nama' => 'Dr. Budi',
                'spesialis' => 'Dokter Paru-paru',
                'created_at' => now(),
                'updated_at'=> now(),
            ],
            [
                'nama' => 'Dr. Caca',
                'spesialis' => 'Dokter Gigi',
                'created_at' => now(),
                'updated_at'=> now(),
            ],
            [
                'nama' => 'Dr. Dedi',
                'spesialis' => 'Dokter Saraf',
                'created_at' => now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
