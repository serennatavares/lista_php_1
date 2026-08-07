<?php

// Uma empresa de análise de dados precisa gerar informações estatísticas sobre
// uma coleção de números. Crie uma função chamada estatisticasNumericas() que
// receba um vetor de números e retorne:
// Soma; Média; Maior valor; Menor valor; Mediana;
// Quantidade de números pares; Quantidade de números ímpares.

function estatisticasNumericas($numeros){

    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    $maiorValor = max($numeros);
    $menorValor = min($numeros);

    // Para calcular a mediana, primeiro precisamos ordenar o vetor
    $numerosOrdenados = $numeros;
    sort($numerosOrdenados);

    $posicaoCentral = floor($quantidade / 2);

    if ($quantidade % 2 == 0){
        // Quantidade par de números: mediana é a média dos dois valores centrais
        $mediana = ($numerosOrdenados[$posicaoCentral - 1] + $numerosOrdenados[$posicaoCentral]) / 2;
    } else {
        // Quantidade ímpar de números: mediana é o valor exatamente do meio
        $mediana = $numerosOrdenados[$posicaoCentral];
    }

    // Conta quantos números são pares e quantos são ímpares
    $quantidadePares = 0;
    $quantidadeImpares = 0;

    foreach ($numeros as $numero){
        if ($numero % 2 == 0){
            $quantidadePares++;
        } else {
            $quantidadeImpares++;
        }
    }

    return [
        "soma" => $soma,
        "media" => $media,
        "maior" => $maiorValor,
        "menor" => $menorValor,
        "mediana" => $mediana,
        "pares" => $quantidadePares,
        "impares" => $quantidadeImpares
    ];

}

$numeros_usuario = [10, 5, 8, 3, 12, 7];

$resultado = estatisticasNumericas($numeros_usuario);

echo "Números: " . implode(", ", $numeros_usuario) . "<br>";
echo "Soma: " . $resultado["soma"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Maior valor: " . $resultado["maior"] . "<br>";
echo "Menor valor: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["impares"] . "<br>";

?>