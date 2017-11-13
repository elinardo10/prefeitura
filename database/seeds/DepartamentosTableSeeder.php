<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('departamentos');

         prefeitura\Departamento::create([
            'nome' => ' Diário Oficial Eletrônico',
            
        ]);

         prefeitura\Departamento::create([
            'nome' => 'Convênios',
            
        ]);

          prefeitura\Departamento::create([
            'nome' => 'Licitações',
            
        ]);

           prefeitura\Departamento::create([
            'nome' => 'Órgãos de Fiscalização',
            
        ]);

            prefeitura\Departamento::create([
            'nome' => 'Concursos Públicos e Seleções',
            
        ]);
    }
}
