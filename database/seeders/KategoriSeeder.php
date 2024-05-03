<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoriss')->insert([
           [
            'kode'=>'AO32',
            'nama'=>'Oli Mesin'
           ],
           [
            'kode'=>'A033',
            'nama'=>'Audio System'
           ],
           [
            'kode'=>'A034',
            'nama'=>'Suspensi'
           ],
           [
            'kode'=>'A35',
            'nama'=>'Ban & Velg'
           ]
        ]);
    }
}
