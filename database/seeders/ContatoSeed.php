<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('contato')->count() > 0) {
            DB::table('contato')->truncate();
        }

        DB::table('contato')->insert([
            'whatsapp' => '42999810942',
            'email' => 'fnatelier@gmail.com',
            'instagram' => 'https://www.instagram.com/aartedebordarpelobrasil/',
            'facebook' => 'https://www.facebook.com/AtelierFernandaNadal',
            'linkedin' => '',
            'youtube' => 'https://www.youtube.com/@FernandaNadal',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
