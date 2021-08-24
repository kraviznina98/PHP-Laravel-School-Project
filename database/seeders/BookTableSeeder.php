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
        DB::table('books')->insert(
            [
                ['naslov' => 'Zelena Milja', 'opis' => 'U Državnom zatvoru Hladna planina, duž jednog usamljenog niza ćelija zvanog Zelena milja, osuđenici čekaju smrt u naručju Vesele varnice.', 'rejting' => 10, 'pisac' => 'Stephen King', 'zanr_id' => 1, 'brStrana' => '328', 'poster' => 'https://www.delfi.rs/_img/artikli/2018/11/zelena_milja_tp_vv.jpg'],
                ['naslov' => 'Stranger Things', 'opis' => 'Ako žele da ovaj eksperiment pomeri granice ljudskog uma, trebaju im posebni kandidati. Poput devojčice koju je poveo sa sobom: ima samo pet godina i toliko neobjašnjive moći da je neophodan strog bezbednosni protokol.', 'rejting' => 7, 'pisac' => 'Gvenda Bond', 'zanr_id' => 1, 'brStrana' => '288', 'poster' => 'https://www.knjizare-vulkan.rs/files/images/slike_proizvoda/352607.jpg'],
                ['naslov' => 'Igra Šaptača', 'opis' => 'Zlo menja ime, menja izgled, krije se, ostavljajući za sobom neizbrisive tragove. Poigrava se i zabavlja, i uvek je nekoliko koraka ispred.', 'rejting' => 10, 'pisac' => 'Donato Karizi', 'zanr_id' => 1, 'brStrana' => '288', 'poster' => 'https://www.knjizare-vulkan.rs/files/watermark/files/images/slike_proizvoda/thumbs_w/336303_w.jpg'],
                ['naslov' => 'Senka', 'opis' => '„Nakon čitanja ove knjige, preplašeno ćete se osvrtati preko ramena…“ – Daily Express', 'rejting' => 8, 'pisac' => 'Laš Kepler', 'zanr_id' => 1, 'brStrana' => '446', 'poster' => 'https://www.vulkani.rs/files/images/slike_proizvoda/24496.jpg']
            ]
        );
    }
}
