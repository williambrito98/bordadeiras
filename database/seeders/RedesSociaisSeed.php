<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RedesSociaisSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $redesSociais = [
            [
                'whatsapp' => 'https://wa.me/+5542999810942?text=ol%C3%A1,%20%20estou%20entrando%20em%20contato%20pelo%20site%20do%20Bordadeiras%20do%20Brasil',
                'youtube' => 'https://www.youtube.com/@FernandaNadal',
                'facebook' => 'https://www.facebook.com/AtelierFernandaNadal',
                'instagram' => 'https://www.instagram.com/aartedebordarpelobrasil/',
                'email' => 'mailto:fnatelier@gmail.com'
            ]
        ];


        if (DB::table('redes_sociais')->count() > 0) {
            DB::table('redes_sociais')->truncate();
        }

        DB::table('redes_sociais')->insert($redesSociais);

    }
}
