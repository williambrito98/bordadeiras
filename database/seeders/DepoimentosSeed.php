<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepoimentosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depoimentos = [
            [
                'text' => '"E essa oficina oferece pra gente a possibilidade de rever aquilo que a gente tem, modificar e ter uma peça nova e usar ela por mais tempo sem precisar estar agredindo o meio ambiente"',
                'autor' => 'Cláudia Beatris Teixeira – Aluna do curso em Montenegro/RS.',
            ],
            [
                'text' => '"O projeto A Arte de Bordar traz muito desse viés de empreendedorismo, de contribuição social porque ele ensina, ele transfere o conhecimento para as mulheres, e esse conhecimento será certamente revertido, transformado, em oportunidade de geração de renda futuramente depois que o projeto sai e esse conhecimento fica para as participantes do projeto."',
                'autor' => 'Lucas Vilela – Comunicação ArcelorMittal',
            ],
        ];

        if (DB::table('depoimentos')->count() > 0) {
            DB::table('depoimentos')->truncate();
        }

        DB::table('depoimentos')->insert($depoimentos);

    }
}
