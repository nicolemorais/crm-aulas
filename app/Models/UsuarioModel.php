<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contato;

class UsuarioModel extends Model{
   
    public function salvar($data){
        if(sizeof($_POST) == 0) return;
        // die(print_r($data));

       $contato['name'] = $data['name'];
       $contato['email'] = $data['email'];
       $contato['subject'] = $data['subject'];
       $contato['message'] = $data['message'];
       Contato::create($contato);

    }
}
