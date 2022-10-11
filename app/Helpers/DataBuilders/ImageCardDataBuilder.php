<?php   

namespace App\Helpers\DataBuilders;

class ImageCardDataBuilder
{

    private $cards = [

        [   
            'imagem' => 36, 
            'subtitulo' => 'Shirt',
            'titulo' => 'Cool Shirt',
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor.',
            'preco_atual' => 59,
            'preco_original' => 79,
            'desejo_marcado' => true,
        ],

        
        [   
            'imagem' => 26, 
            'subtitulo' => 'Calça',
            'titulo' => 'Soim',
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor.',
            'preco_atual' => 19,
            'preco_original' => 99,
            'desejo_marcado' => true,
        ],

        
        [   
            'imagem' => 15, 
            'subtitulo' => 'Bone',
            'titulo' => 'azul',
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor.a',
            'preco_atual' => 109,
            'preco_original' => 89,
            'desejo_marcado' => true,
        ],

        
        [   
            'imagem' => 6, 
            'subtitulo' => 'Tenis',
            'titulo' => 'tenis verde',
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor.',
            'preco_atual' => 896,
            'preco_original' => 485,
            'desejo_marcado' => false,
        ]

    ];

    public function getData(){
        return $this->cards;
    }


}