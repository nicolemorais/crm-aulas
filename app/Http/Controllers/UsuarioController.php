<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel; //coordenador 
use App\Models\Pessoa; // DAO (data access object)
use App\Models\Contato;


class UsuarioController extends Controller {

    public function contato(Request $request) {
        $input = $request->input();
        $model = new UsuarioModel();
        $model->save($input);
        return view('private.contact-form');
    }

    public function insere(){
        $pessoa = new Pessoa();
        $pessoa->nome = 'Machado';
        $pessoa->sobrenome = 'de Assis';
        $pessoa->save();
        echo 'Dados inseridos com sucesso';

        // O framework, internamente, organiza as informações para serem inseridas no banco de dados
        //$V = $pessoa->getAttributes();
        //print_r($v);
    }

    public function leitura($modo = 'all'){

        if(strcmp($modo, 'all') == 0){
            $V = Contato::all();
        }

        //Busca informação atráves da chave primária
        if(strcmp($modo, 'find') == 0){
            $row = Contato::find(3);
            echo $row ['name'].', '.$row['subject'].'<br>';
            return;
        }

        if(strcmp($modo, 'where') == 0){
            $V = Contato::where('id', '>', 2);
        }

        foreach ($V as $row){
            echo $row ['name'].', '.$row['subject'].'<br>';
        }


    }
    
}
