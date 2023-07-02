<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //simulação de dados

        \App\Models\Captura::insert([
            [
                'certidao' => 'Macapá Contribuinte',
                'categoria' => 'Municipal',
                'uf' => 'AP',
                'status' => 'Ativo'
            ],
            [
                'certidao' => 'Alagoas - Cadastro Sintegra',
                'categoria' => 'Estadual',
                'uf' => 'AL',
                'status' => 'Ativo'
            ],
            [
                'certidao' => 'Distrito Federal - Junta Comercial',
                'categoria' => 'Estadual',
                'uf' => 'DF',
                'status' => 'Em Manutenção'
            ]
        ]);

        \App\Models\Extrato::insert([
            [
                'certidao' => 'São Paulo - Tribunal de Justiça/Portal do Extrajudicial - Concorrência Pública',
                'competencia' => '02/2023',
                'quantidadecnd' => '124',
                'quantidadecnpj' => '100',
            ],
            [
                'certidao' => 'Macapá Contribuinte',
                'competencia' => '01/2023',
                'quantidadecnd' => '225',
                'quantidadecnpj' => '225',
            ],
            [
                'certidao' => 'Receita Federal/PGFN - Pessoa Jurídica',
                'competencia' => '02/2023',
                'quantidadecnd' => '15',
                'quantidadecnpj' => '5',
            ],
            [
                'certidao' => 'FGTS',
                'competencia' => '01/2023',
                'quantidadecnd' => '124',
                'quantidadecnpj' => '100',
            ],
            [
                'certidao' => 'Alagoas - Cadastro Sintegra',
                'competencia' => '04/2023',
                'quantidadecnd' => '26',
                'quantidadecnpj' => '20',
            ],
            [
                'certidao' => 'Distrito Federal - Junta Comercial',
                'competencia' => '01/2023',
                'quantidadecnd' => '350',
                'quantidadecnpj' => '305',
            ]
        ]);

        \App\Models\Usuario::insert([
            [
                'nome' => 'Questor Admin',
                'email' => 'questor@questores.com.br',
                'password' => '$2y$10$6MMqElQkvv1nElvb6Ru0wOaGBlH4RxYsnpHjBlVEjFGbKnTz1KJbm',
                'status' => 1,
                'admin' => 1
            ]
        ]);
    }
}
