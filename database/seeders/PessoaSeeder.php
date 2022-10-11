<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pessoa;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        /*$p1 = new Pessoa();
        $p1->nome = 'Matheus';
        $p1->sobrenome = 'Silvestre';
        $p1->save();

        $p1 = new Pessoa();
        $p1->nome = 'Alex';
        $p1->sobrenome = 'Sander';
        $p1->save();

        $p1 = new Pessoa();
        $p1->nome = 'Julio';
        $p1->sobrenome = 'Barbosa';
        $p1->save();*/

        Pessoa::factory(50)->create();

        // Save --> manda informações pro banco de dados
    }
}
