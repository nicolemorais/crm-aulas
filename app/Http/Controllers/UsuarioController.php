<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel; //coordenador
use App\Models\Pessoa; // DAO (Data Acess object)
use App\Models\Contato;

class UsuarioController extends Controller
{
    public function contato(Request $request){
        $input = $request->input();
        $model = new UsuarioModel();
        $model->salvar($input);
        return view('private/contact-form');
    }

    public function insere(){
        $pessoa = new Pessoa();
        $pessoa->nome = 'Machado';
        $pessoa->sobrenome = 'De Assis';
        $pessoa->save();
        echo 'Dados inseridos com sucesso';

        //o framework, internamente organiza as informações
        //para serem inseridos no banco de dados
        //$v = $pessoa->getAttributes();
        //print_r($v);
    }

    public function leitura($modo = 'all'){

        
        if(strcmp($modo, 'all') == 0){
            $v = Contato::all();
        }

        if(strcmp($modo, 'find') == 0){
            $row = Contato::find(1);
            echo $row['name'].','.$row['subject'].'<br>';
            return; 
        }

        if(strcmp($modo, 'where') == 0){
            $v = Contato::where('id', '=', 1)->get();
        }

        foreach ($v as $row){
            echo $row['name'].','.$row['subject'].'<br>';
        }

    }

    public function update(){
        //recuperar o registro
        $p = Pessoa::find(6);

        //alterar seu conteudo
        $p->nome = 'Maria';
        $p->sobrenome = 'Da Penha';

        //salvar o registro
        $p->save();
        echo 'Done!';
    }

    public function update2(){
        // informação recebida via POST
        $post = ['id' => 35, 'nome' => 'Diana', 'sobrenome' => 'Spencer'];

        // encontra o registro que será atualizado
        $p = Pessoa::find($post['id']);

        // registrar os dados atualizados
        $p->update($post);
        echo 'OK!';
    }

    public function delete(){
        // Pessoa::find(33)->delete();

        //busca sem saber id
        $v = Pessoa::where('nome', '=', 'Darion')->get()->first();
        $v->delete();
    }

    public function destroy(){
        Pessoa::destroy(40);
    }

    public function lista(){
        $v = Pessoa::where('id', '>', 29)->where('id', '<', 41)
        ->get()->sortBy('nome')->toArray();

        //percurso (traversal)
        foreach ($v as $row){
            echo $row['nome'].' '.$row['sobrenome'].'<br>';
        }
    }

}
