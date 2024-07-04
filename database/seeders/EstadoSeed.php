<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::table('estados')->insert([
                ['id' => 35, 'nome' => 'São Paulo', 'codigo_uf' => 'SP'],
                ['id' => 41, 'nome' => 'Paraná', 'codigo_uf' => 'PR'],
                ['id' => 42, 'nome' => 'Santa Catarina', 'codigo_uf' => 'SC'],
                ['id' => 43, 'nome' => 'Rio Grande do Sul', 'codigo_uf' => 'RS'],
                ['id' => 50, 'nome' => 'Mato Grosso do Sul', 'codigo_uf' => 'MS'],
                ['id' => 11, 'nome' => 'Rondônia', 'codigo_uf' => 'RO'],
                ['id' => 12, 'nome' => 'Acre', 'codigo_uf' => 'AC'],
                ['id' => 13, 'nome' => 'Amazonas', 'codigo_uf' => 'AM'],
                ['id' => 14, 'nome' => 'Roraima', 'codigo_uf' => 'RR'],
                ['id' => 15, 'nome' => 'Pará', 'codigo_uf' => 'PA'],
                ['id' => 16, 'nome' => 'Amapá', 'codigo_uf' => 'AP'],
                ['id' => 17, 'nome' => 'Tocantins', 'codigo_uf' => 'TO'],
                ['id' => 21, 'nome' => 'Maranhão', 'codigo_uf' => 'MA'],
                ['id' => 24, 'nome' => 'Rio Grande do Norte', 'codigo_uf' => 'RN'],
                ['id' => 25, 'nome' => 'Paraíba', 'codigo_uf' => 'PB'],
                ['id' => 26, 'nome' => 'Pernambuco', 'codigo_uf' => 'PE'],
                ['id' => 27, 'nome' => 'Alagoas', 'codigo_uf' => 'AL'],
                ['id' => 28, 'nome' => 'Sergipe', 'codigo_uf' => 'SE'],
                ['id' => 29, 'nome' => 'Bahia', 'codigo_uf' => 'BA'],
                ['id' => 31, 'nome' => 'Minas Gerais', 'codigo_uf' => 'MG'],
                ['id' => 33, 'nome' => 'Rio de Janeiro', 'codigo_uf' => 'RJ'],
                ['id' => 51, 'nome' => 'Mato Grosso', 'codigo_uf' => 'MT'],
                ['id' => 52, 'nome' => 'Goiás', 'codigo_uf' => 'GO'],
                ['id' => 53, 'nome' => 'Distrito Federal', 'codigo_uf' => 'DF'],
                ['id' => 22, 'nome' => 'Piauí', 'codigo_uf' => 'PI'],
                ['id' => 23, 'nome' => 'Ceará', 'codigo_uf' => 'CE'],
                ['id' => 32, 'nome' => 'Espírito Santo', 'codigo_uf' => 'ES']
            ]);
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }

    }
}
