<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris_id')->insert([
            [
                'deskripsi' => 'Original',
                'kode' => 'baru'
            ],
            [
                'deskripsi' => 'kelas1',
                'kode' => 'Second'
            ],
            [
                'deskripsi' => 'nonOriginal',
                'kode' => 'Rusak'
            ],
        ]);
    }
}
