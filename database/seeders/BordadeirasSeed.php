<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BordadeirasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bordadeiras = [
            [
                'banner_url' => '/img/g_Lilian-Regina-Borges-Peres-Itaya-bordadeiras-do-Brasil-17-06-24-133442-1998_2.jpg',
                'thumbnail_url' => '/img/q_Lilian-Regina-Borges-Peres-Itaya-bordadeiras-do-Brasil-17-06-24-133442-1998.jpg',
                'nome' => 'Lilian Regina Borges Peres Itaya',
                'content' => '',
                'images' => json_encode(['/img/g_Lilian-Regina-Borges-Peres-Itaya-bordadeiras-do-Brasil-17-06-24-133442-1998_2.jpg']),
                'cidade_id' => 3509502,
                'instagram' => '',
                'email' => '',
                'facebook' => '',
                'youtube' => '',
                'whatsapp' => '',
                'linkedin' => '',
                'created_at' => now(),
            ],
            [
                'banner_url' => '/img/g_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999_2.jpg',
                'thumbnail_url' => '/img/q_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999.jpg',
                'nome' => 'Rosilene Aparecida Mendes',
                'content' => 'Atualmente trabalho com bijuterias. Sou apaixonada pelos acessórios em miçangas, strass e lantejoulas. Logo após conhecer o bordado em pedrarias da Fernanda, a minha paixão só cresceu. Sinto enorme prazer em trabalhar com elas. Amo o efeito, o brilho e as formas que são possíveis de se realizar através delas.',
                'images' => json_encode(['/img/g_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999_2.jpg']),
                'cidade_id' => 3509502,
                'instagram' => 'https://www.bordadeirasdobrasil.com.br/@labellerosi',
                'email' => '',
                'facebook' => '',
                'youtube' => '',
                'whatsapp' => 'https://wa.me/?text=ol%C3%A1,%20encontrei%20seu%20bordado%20no%20site%20Bordados%20do%20Brasil:',
                'linkedin' => '',
                'created_at' => now(),
            ]
        ];

        if (DB::table('bordadeiras')->count() > 0) {
            DB::table('bordadeiras')->truncate();
        }

        DB::table('bordadeiras')->insert($bordadeiras);

    }
}
