<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'La huitième couleur',
                'author' => 'Pratchett',
                'synopsis' => "Un terre plate sur le dos de 4 éléphants sur le dos d'une tortue",
                'publication_year' => 2000,
                'genre' => 'Fantasy burlesque',
            ],
            [
                'title' => "L'épée de vérité",
                'author' => 'Terry Goodkind',
                'synopsis' => "L'histoire d'un forestier avec son épée",
                'publication_year' => 2005,
                'genre' => 'Fantasy',
            ],
            [
                'title' => 'A la croisée des mondes',
                'author' => 'Pullman',
                'synopsis' => "Les aventures de Lyra et Pan",
                'publication_year' => 1995,
                'genre' => 'Enfant',
            ]
        ]);
    }
}
