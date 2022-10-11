<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BreadCrumbModel;
use App\Models\VendasModel;

// um controlador é um gerador de paginas
// cada metodo exibe uma pagina para o usuario
class VendasController extends Controller
{
    public function index(){
       
        $bcm = new BreadCrumbModel();
        $m = $bcm->getByName('data');
        return view('private/lista_vendas', ['path' => $m]);
    }

    //documentação de codigo:
    //diz o que o metodo faz; não como fa!

    /**
     * Gera o Relatorio de vendas por departamento 
     *
     * @param $mes: mes de execução das vendas
     * @param $departamento: nome do departamento que realizou as vendas
     */

    public function relatorio($mes, $departamento){ 
        return view ('private/relatorio', ['mes' => $mes, 'departamento' => $departamento]);
    }

    
    public function produtos(){
        $model = new VendasModel();
        $cards = $model->getCards();

        return view('site/ecommerce', ['cards' => $cards]);
    }

}
