<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel; //coordenador 
use App\Models\Pessoa; // DAO (data access object)

class UsuarioController extends Controller {

    public function contato(Request $request) {
        $input = $request->input();
        $model = new UsuarioModel();
        $model->salvar($input);
        return view('private.contact-form');
    }

    public function insere(){
        $pessoa = new Pessoa();
        $pessoa->nome = 'Machado';
        $pessoa->sobrenome = 'de Assis';
        $pessoa->save();
        echo 'Dados inseridos com sucesso';

        // O framework, internamente, organiza as informações para serem inseridas no banco de dados
        //$v = $pessoa->getAttributes();
        //print_r($v);
    }
    
}
