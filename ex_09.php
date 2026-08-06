<?php

function parOuImpar($numero){

    if($numero % 2 == 0){
        return "Par";
    }

    return "Ímpar";
}

function primo($numero){

    if($numero < 2){
        return "Não";
    }

    for($i = 2; $i < $numero; $i++){
        if($numero % $i == 0){
            return "Não";
        }
    }

    return "Sim";
}

function perfeito($numero){

    $soma = 0;

    for($i = 1; $i < $numero; $i++){
        if($numero % $i == 0){
            $soma += $i;
        }
    }

    if($soma == $numero){
        return "Sim";
    }

    return "Não";
}

function analisarNumero($numero){

    return [
        "parImpar" => parOuImpar($numero),
        "primo" => primo($numero),
        "perfeito" => perfeito($numero)
    ];
}

$numero = 28;

$resultado = analisarNumero($numero);

echo "Número: $numero <br>";
echo "Par ou Ímpar: " . $resultado["parImpar"] . "<br>";
echo "Primo: " . $resultado["primo"] . "<br>";
echo "Perfeito: " . $resultado["perfeito"] . "<br>";

?>