<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Pasien')->insert([
            [
                'nama' => 'Ahmad Baihaqi',
                'alamat' => 'Jl. Raya No. 1',
                'no_telp' => '081234567890',
                'tgl_lahir' => '2000-01-01',
                'jenis_kelamin' => 'L',
                'pekerjaan' => 'Mahasiswa',
                'created_at' => now(),
                'updated_at'=> now(),
            ],
            [
                'nama'=> 'Budi Cahyono',
                'alamat' => 'Jl. Raya No. 2',
                'no_telp' => '081234567891',
                'tgl_lahir' => '2000-02-02',
                'jenis_kelamin'=> 'L',
                'pekerjaan' => 'Wiraswasta',
                'created_at' => now(),
                'updated_at'=> now(),
            ],
            [
                'nama'=> 'Caca Marica',
                'alamat' => 'Jl. Raya No. 3',
                'no_telp' => '081234567892',
                'tgl_lahir' => '2000-03-03',
                'jenis_kelamin'=> 'P',
                'pekerjaan' => 'Ibu Rumah Tangga',
                'created_at' => now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
