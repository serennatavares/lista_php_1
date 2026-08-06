<?php

function ordenarNomes($nomes){

    $lista = explode(",", $nomes);

    foreach($lista as $i => $nome){
        $lista[$i] = trim($nome);
    }

    sort($lista);

    return $lista;
}

$nomes = "Serenna, Cebola, Lucas, Aimê, Henrique";

$resultado = ordenarNomes($nomes);

echo "Lista organizada:<br>";

foreach($resultado as $nome){
    echo $nome . "<br>";
}

?>