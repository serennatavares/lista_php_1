<?php

//Uma loja virtual oferece descontos conforme o valor da compra.
//Crie uma função chamada calcularDesconto() que receba o valor total da compra
//e aplique as seguintes regras:
//● Até R$ 100,00: sem desconto;
//● Acima de R$ 100,00: 10%;
//● Acima de R$ 500,00: 20%;
//● Acima de R$ 1.000,00: 30%.
//Retorne o valor original, o desconto aplicado e o valor final da compra.

function calcularDesconto($valorTotal) {
    $desconto = 0;

    if ($valorTotal > 1000) {
        $desconto = 0.30;
    } elseif ($valorTotal > 500) {
        $desconto = 0.20;
    } elseif ($valorTotal > 100) {
        $desconto = 0.10;
    }

    $valorDesconto = $valorTotal * $desconto;
    $valorFinal = $valorTotal - $valorDesconto;

    return [
        "valorOriginal" => $valorTotal,
        "descontoAplicado" => $valorDesconto,
        "valorFinal" => $valorFinal
    ];
}

$valorTotal = 750;
$resultado = calcularDesconto($valorTotal);

echo "Resultado do cálculo de desconto para R$ 750,00:";
echo "<br>";
echo "Valor original: R$ " . $resultado["valorOriginal"];
echo "<br>";
echo "Desconto aplicado: R$ " . $resultado["descontoAplicado"];
echo "<br>";
echo "Valor final: R$ " . $resultado["valorFinal"];

?>