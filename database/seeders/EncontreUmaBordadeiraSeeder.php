<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncontreUmaBordadeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('encontre_uma_bordadeira')->count() > 0) {
            DB::table('encontre_uma_bordadeira')->truncate();
        }

        DB::table('encontre_uma_bordadeira')->insert([
            'description' => '<p style="font-size: 16px" align="justify">Na aba da Plataforma “Encontre uma bordadeira” a pessoa ou empresa interessada em contratar serviço de bordado em pedrarias poderá acessar as bordadeiras cadastradas através dos seus contatos e redes sociais, além de conhecer um pouco da história de cada uma.<br><br></p>',
        ]);
    }
}
