<?php

function soma($numeros){
    return array_sum($numeros);
}

function media($numeros){
    return array_sum($numeros) / count($numeros);
}

function maiorValor($numeros){
    return max($numeros);
}

function menorValor($numeros){
    return min($numeros);
}

function mediana($numeros){

    sort($numeros);

    $quantidade = count($numeros);
    $meio = floor($quantidade / 2);

    if($quantidade % 2 == 0){
        return ($numeros[$meio - 1] + $numeros[$meio]) / 2;
    }else{
        return $numeros[$meio];
    }
}

function contarPares($numeros){

    $pares = 0;

    foreach($numeros as $numero){
        if($numero % 2 == 0){
            $pares++;
        }
    }

    return $pares;
}

function contarImpares($numeros){

    $impares = 0;

    foreach($numeros as $numero){
        if($numero % 2 != 0){
            $impares++;
        }
    }

    return $impares;
}

function estatisticasNumericas($numeros){

    return [
        "soma" => soma($numeros),
        "media" => media($numeros),
        "maior" => maiorValor($numeros),
        "menor" => menorValor($numeros),
        "mediana" => mediana($numeros),
        "pares" => contarPares($numeros),
        "impares" => contarImpares($numeros)
    ];
}

$numeros = [10, 5, 8, 3, 15, 20];

$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado["soma"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Maior valor: " . $resultado["maior"] . "<br>";
echo "Menor valor: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["impares"] . "<br>";

?>