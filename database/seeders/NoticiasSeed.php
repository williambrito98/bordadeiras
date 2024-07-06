<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $noticias = [
            [
                'site_url' => 'https://www.mogiguacu.sp.gov.br/noticias/comunicacao/2040/projeto-a-arte-de-bordar-vai-oferecer-formacao-gratuita-para-100-mulheres-de-mogi-guacu.html',
                'image_url' => '/img/Fotógrafo Gabriehl Oliveira--.JPG',
                'subtitle' => '<p>Mulheres a partir de 16 anos podem adquirir um novo ofício: o de bordadeira. O projeto A Arte de Bordar pelo Brasil - edição 01- ocorre pela primeira vez em Mogi Guaçu, mais especificamente no Centro Cultural.</p>',
                'title' => 'Projeto A Arte de Bordar vai oferecer formação gratuita para 100 mulheres de Mogi Guaçu',
                'created_at' => now(),
                'user_id' => 1
            ],
            [
                'title'=> 'Campinas recebe pela primeira vez o projeto A Arte de Bordar',
                'site_url' => 'https://horacampinas.com.br/campinas-recebe-pela-primeira-vez-o-projeto-a-arte-de-bordar/',
                'image_url' => '/img/Fotógrafo Gabriehl Oliveira__-.jpg',
                'subtitle' => '<p>Alunas da formação de bordado em pedraria com a artista Fernanda Nadal. Foto Niemar Silva/Divulgação.</p>',
                'created_at' => now(),
                'user_id' => 1
            ],
            [
                'image_url' => '/img/noticia_1.jpg',
                'title' => '‘A Arte de Bordar’ chega a Mogi Guaçu com formação gratuita para 100 mulheres',
                'site_url' => 'https://horacampinas.com.br/a-arte-de-bordar-chega-a-mogi-guacu-com-formacao-gratuita-para-100-mulheres/',
                'subtitle' => '',
                'created_at' => now(),
                'user_id' => 1
            ],
            [
                'image_url' => '/img/noticia_2.jpg',
                'title' => "Últimos dias para se inscrever na formação gratuita 'A arte de Bordar' que ensinará o ofício de bordadeira para 100 mulheres",
                'site_url' => 'https://oregional.net/ultimos-dias-para-se-inscrever-na-formacao-gratuita-a-arte-de-bordar-que-ensinara-o-oficio-de-bordadeira-para-100-mulheres-169179',
                'subtitle' => '',
                'created_at' => now(),
                'user_id' => 1
            ]
        ];


        if (DB::table('noticias')->count() > 0) {
            DB::table('noticias')->truncate();
        }

        DB::table('noticias')->insert($noticias);

    }
}
