<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'type' => 'Normal',
            ],
            [
                'type' => 'Combat',
            ],
            [
                'type' => 'Vol',
            ],
            [
                'type' => 'Poison',
            ],
            [
                'type' => 'Roche',
            ],
            [
                'type' => 'Insecte',
            ],
            [
                'type' => 'Spectre',
            ],
            [
                'type' => 'Acier',
            ],
            [
                'type' => 'Feu',
            ],
            [
                'type' => 'Eau',
            ],
            [
                'type' => 'Plante',
            ],
            [
                'type' => 'Electrik',
            ],
            [
                'type' => 'Psy',
            ],
            [
                'type' => 'Glace',
            ],
            [
                'type' => 'Dragon',
            ],
            [
                'type' => 'Ténèbres',
            ],
            [
                'type' => 'Fée'
            ],
        ]);
    }
}
