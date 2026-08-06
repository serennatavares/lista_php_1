<?php

function maiorNota($notas){
    return max($notas);
}

function menorNota($notas){
    return min($notas);
}

function media($notas){
    return array_sum($notas) / count($notas);
}

function situacao($media){

    if($media >= 7){
        return "Aprovado";
    } elseif($media >= 5){
        return "Recuperação";
    } else{
        return "Reprovado";
    }
}

function calcularMedia($notas){

    $mediaFinal = media($notas);

    return [
        "maiorNota" => maiorNota($notas),
        "menorNota" => menorNota($notas),
        "media" => $mediaFinal,
        "situacao" => situacao($mediaFinal)
    ];
}

$notas = [8, 7, 9, 6];

$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado["maiorNota"] . "<br>";
echo "Menor nota: " . $resultado["menorNota"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Situação: " . $resultado["situacao"] . "<br>";

?>