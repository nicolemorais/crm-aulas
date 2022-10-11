@if(strcmp($departamento, 'ti' ) == 0 )
    echo "Relatorio do mes $mes para o departamento de Tecnologia da informação";
@elseif(strcmp($departamento, 'av' ) == 0 )
    echo "Relatorio do mes $mes para o departamento de Audio e video";
@else
    echo "Departamento desconhecido";
@endif