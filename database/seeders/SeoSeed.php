<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if (DB::table('seo')->count() > 0) {
            DB::table('seo')->truncate();
        }

        DB::table('seo')->insert([
            'title' => 'Bordadeiras do Brasil'
        ]);
    }
}
