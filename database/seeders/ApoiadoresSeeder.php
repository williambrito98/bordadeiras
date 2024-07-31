<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApoiadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('apoiadores')->count() > 0) {
            DB::table('apoiadores')->truncate();
        }

        $baseUrl = env('APP_PORT') ? env('APP_URL') . ':' . env('APP_PORT') : env('APP_URL');

        $apoiadores = [
            'incentivadores' => json_encode([
                [
                    'site_url' => '#',
                    'logo_url' => $baseUrl . '/img/' . urlencode('lei-de-incentivo-a-cultura-lei-rouanet-bordadeiras-do-brasil-27-05-24-205601_1994.png')
                ]
            ]),
            'patrocinadores' => json_encode([
                [
                    'site_url' => 'https://www.deere.com.br/',
                    'logo_url' => $baseUrl . '/img/' . urlencode('ABA_APOIADORES_PATROCÍNIO.png')
                ]
            ]),
            'parceiros' => json_encode([
                [
                    'site_url' => '#',
                    'logo_url' => $baseUrl . '/img/' . urlencode('amora-bordadeiras-do-brasil-27-05-24-204725_1977.png')
                ]
            ]),
            'realizadores' => json_encode([
                [
                    'site_url' => '#',
                    'logo_url' => $baseUrl . '/img/' . urlencode('ministerio-da-cultura-bordadeiras-do-brasil-28-05-24-210117_1995.png')
                ]
            ])
        ];


        DB::table('apoiadores')->insert($apoiadores);
    }
}
