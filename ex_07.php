<?php

// Uma loja virtual oferece descontos conforme o valor da compra.
// Crie uma função chamada calcularDesconto() que receba o valor total da compra
// e aplique as seguintes regras:
// Até R$ 100,00: sem desconto
// Acima de R$ 100,00: 10%
// Acima de R$ 500,00: 20%
// Acima de R$ 1.000,00: 30%
// Retorne o valor original, o desconto aplicado e o valor final da compra.

function calcularDesconto($valorCompra){

    // Definimos a porcentagem de desconto de acordo com a faixa de valor
    if ($valorCompra > 1000){
        $percentualDesconto = 0.30;
    } elseif ($valorCompra > 500){
        $percentualDesconto = 0.20;
    } elseif ($valorCompra > 100){
        $percentualDesconto = 0.10;
    } else {
        $percentualDesconto = 0;
    }

    $valorDesconto = $valorCompra * $percentualDesconto;
    $valorFinal = $valorCompra - $valorDesconto;

    return [
        "valor_original" => $valorCompra,
        "desconto" => $valorDesconto,
        "valor_final" => $valorFinal
    ];

}

$valor_usuario = 750;

$resultado = calcularDesconto($valor_usuario);

echo "Valor original: R$ " . number_format($resultado["valor_original"], 2, ",", ".") . "<br>";
echo "Desconto aplicado: R$ " . number_format($resultado["desconto"], 2, ",", ".") . "<br>";
echo "Valor final: R$ " . number_format($resultado["valor_final"], 2, ",", ".") . "<br>";

?>