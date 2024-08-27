<?php

namespace Database\Seeders;

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
                'content' => 'Já faço bordado em linha desde os meus 20 anos, mas sempre como uma atividade recreativa, tendo parado de fazer nos últimos anos. Ao ver o curso, me perguntei: por que não? E me surpreendi com o bordado em pedrarias. Voltar a bordar me ajudou a superar um trauma emocional e, quem sabe, poderá representar uma fonte de renda.',
                'images' => json_encode(['/img/g_Lilian-Regina-Borges-Peres-Itaya-bordadeiras-do-Brasil-17-06-24-133442-1998_2.jpg']),
                'cidade_id' => 3509502,
                'instagram' => '',
                'email' => '',
                'facebook' => '',
                'youtube' => '',
                'whatsapp' => '19993693043',
                'linkedin' => '',
                'created_at' => now(),
            ],
            [
                'banner_url' => '/img/g_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999_2.jpg',
                'thumbnail_url' => '/img/q_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999.jpg',
                'nome' => 'Rosilene Aparecida Mendes',
                'content' => 'Atualmente trabalho com bijuterias. Sou apaixonada pelos acessórios em miçangas, strass e lantejoulas. Logo após conhecer o bordado em pedrarias da Fernanda, a minha paixão só cresceu. Sinto enorme prazer em trabalhar com elas. Amo o efeito, o brilho e as formas que são possíveis de se realizar através delas.',
                'images' => json_encode(['/img/g_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999_2.jpg']),
                'cidade_id' => 3136207,
                'instagram' => 'https://www.bordadeirasdobrasil.com.br/@labellerosi',
                'email' => '',
                'facebook' => '',
                'youtube' => '',
                'whatsapp' => '',
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
