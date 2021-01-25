<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert(
            [
                ['naslov' => 'John Wick', 'opis' => 'Prica filma prati Dzona Vika (Keanu Reevs) koji je nekada bio placeni ubica. Zbog ljubavi prema supruzi, ostavlja posao, i odlucuje da potpuno promeni zivot, ali onda jednoga dana...', 'rejting' => 8.50, 'reziser' => 'Chad Stahelski', 'zanr_id' => 1, 'trajanje' => '2h', 'poster' => 'https://static1.squarespace.com/static/5ee5ea55da5ceb45cfb7be09/t/5f8d9b7df2518c4f33c62cf0/1603115904218/JOHN+WICK+2.jpg?format=1500w'],
                ['naslov' => 'Amazing Spiderman', 'opis' => 'Prica filma prati srednjoskolca Pitera Parkera (Andrew Garfield). U jednoj poseti naucno istrazivackom centru Oscorp, ujeda ga pauk razvijan u laboratorijskim uslovima, i daje mu super moci.', 'rejting' => 8, 'reziser' => 'Marc Weeb', 'zanr_id' => 11, 'trajanje' => '2h20min', 'poster' => 'https://miro.medium.com/max/4050/1*gjIsgVxqtJgTrvpHvUMp_w.jpeg'],
                ['naslov' => 'Why Him', 'opis' => 'U filmu se radi o ljubavnom paru. Medjutim devojcini roditelji su izricito protiv njenog izlazenja sa tom konkretnomn osobom.', 'rejting' => 8.10, 'reziser' => 'John Hamburg', 'zanr_id' => 4, 'trajanje' => '1:45h', 'poster' => 'https://1.bp.blogspot.com/-2XFyZAR-XZs/WHQjSGvzGSI/AAAAAAAAM9k/zN4RterKHyAkv2d-vbdWAEA2AoYZ4GcJwCLcB/s1600/Why%2BHim%2Bmovie%2Bposter.jpg'],
                ['naslov' => 'Catch Me If you Can', 'opis' => 'Glavnog lika igra Leonardo Di Caprio. U filmu se bavi prevarama i falsifikovanjem diploma i dokumenata, sve dok ga jednom ne uhvate...', 'rejting' => 8.30, 'reziser' => 'Steven Spilberg', 'zanr_id' => 3, 'trajanje' => '3h30min', 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81V%2Bb69u3xL._SL1500_.jpg'],
                ['naslov' => 'Parasite', 'opis' => 'Prica filma prati jednu korejsku porodicu, koja se postepeno useljava u kucu bogatasa. To im prolazi, sve dok jednog dana...', 'rejting' => 8.70, 'reziser' => 'Bong Joon-ho', 'zanr_id' => 4, 'trajanje' => '2h', 'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81iQLZujrlL._SL1500_.jpg']
            ]
        );
    }
}
