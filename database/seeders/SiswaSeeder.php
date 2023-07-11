<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->delete();
        DB::table('siswas')->insert(

            [
                'nis' => '1234567890',
                'nama' => 'John Doe',
                'alamat' => 'Jl. Lorem Ipsum Dolor Sit Amet',
                'no_telp' => '081234567890',
                'email' => 'coba@mail.com'

            ],
            [
                'nis' => '1234567891',
                'nama' => 'Haris',
                'alamat' => 'Jl. Lorem Ipsum Dolor Sit Amet',
                'no_telp' => '081234567890',
                'email' => 'coba@mail.com'

            ]

        );
    }
}