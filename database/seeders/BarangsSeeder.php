<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangss')->insert([
            [
                'name' => 'Roko',
                'price' => 2,
                'foto' => 'empty',
                'kategoris_id' => 1
            ],
            [
                'name' => 'Sepeda',
                'price' => 3,
                'foto' => 'unknow',
                'kategoris_id' => 2
            ],
            [
                'name' => 'Korek',
                'price' => 4,
                'foto' => 'nothing',
                'kategoris_id' => 3
            ],
        ]);
    }
}
