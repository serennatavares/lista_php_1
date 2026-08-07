<?php

// Uma empresa de engenharia precisa automatizar alguns cálculos utilizados em seus projetos.
// Crie uma função chamada calcularFormula() que receba dois números e aplique a seguinte fórmula:
// (x²+y²) / (x + y)
// Retorne ao resultado da operação.
// Caso a soma seja igual a zero, informe que não é possível realizar a divisão.

function calcularFormula($x,$y){

    if (($x + $y) == 0){
        return "Não foi possível realizar a divisão por zero!";
    }
    // (x²+y²) / (x + y)

    $resultado = ((pow($x,2) + pow($y,2)) / ($x + $y));
    return $resultado;

}
$x_usuario = 30;
$y_usuario = 50;

echo "Valor de X é: $x_usuario <br>";
echo "Valor de Y é: $y_usuario <br>";

echo calcularFormula($x_usuario,$y_usuario);

?>