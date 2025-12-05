<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ApoiadoresSeeder::class,
            EstadoSeed::class,
            CidadeSeed::class,
            DefaultUserSeed::class,
            NoticiasSeed::class,
            DepoimentosSeed::class,
            BordadeirasSeed::class,
            RedesSociaisSeed::class,
            NossaHistoriaSeed::class,
            ContatoSeed::class,
            HomeSecaoSeed::class,
            SeoSeed::class,
            EncontreUmaBordadeiraSeeder::class,
        ]);
    }

    private function runFactories(...$models)
    {
        foreach ($models as $model) {
            if (env('APP_ENV') !== 'local') return null;
            $model = new $model;
            if ($model::count() === 0) $model::factory(10)->create();
        }
    }
}
