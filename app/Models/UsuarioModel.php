<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contato;

class UsuarioModel extends Model {
    
    public function salvar($data) {
        // inserir no banco de dados
       $contato['name'] = $data['name'];
       $contato['email'] = $data['email'];
       $contato['subject'] = $data['subject'];
       $contato['message'] = $data['message'];

        // Quem vai inserir estes dados?
        Contato::create($contato);

        //Onde vamos inserir estes dados?
       


    }

}
