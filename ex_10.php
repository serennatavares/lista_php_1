<?php

// Uma escola precisa automatizar o cálculo das médias dos estudantes.
// Crie uma função chamada calcularMedia() que receba um vetor contendo as
// notas de um aluno. A função deverá retornar:
// Maior nota; Menor nota; Média; Situação final (Aprovado, Recuperação ou Reprovado).

function calcularMedia($notas){

    // max() e min() já retornam o maior e o menor valor de um vetor
    $maiorNota = max($notas);
    $menorNota = min($notas);

    // array_sum() soma todos os valores do vetor, depois dividimos pela
    // quantidade de notas (count) para obter a média
    $media = array_sum($notas) / count($notas);

    // Regra de situação final baseada na média
    if ($media >= 7){
        $situacao = "Aprovado";
    } elseif ($media >= 5){
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "maior_nota" => $maiorNota,
        "menor_nota" => $menorNota,
        "media" => $media,
        "situacao" => $situacao
    ];

}

$notas_usuario = [7.5, 6.0, 8.5, 5.0];

$resultado = calcularMedia($notas_usuario);

echo "Notas: " . implode(", ", $notas_usuario) . "<br>";
echo "Maior nota: " . $resultado["maior_nota"] . "<br>";
echo "Menor nota: " . $resultado["menor_nota"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Situação final: " . $resultado["situacao"] . "<br>";

?>