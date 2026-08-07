<?php

// Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes escalas.
// Crie uma função chamada converterTemperatura() que receba um valor, a escala de origem
// e a escala de destino. A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin.

function converterTemperatura($valor, $origem, $destino){

    // Primeiro convertemos qualquer escala de origem para Celsius,
    // assim criamos um "ponto comum" antes de converter para o destino
    switch ($origem){

        case "celsius":
            $emCelsius = $valor;
            break;

        case "fahrenheit":
            $emCelsius = ($valor - 32) * 5 / 9;
            break;

        case "kelvin":
            $emCelsius = $valor - 273.15;
            break;

        default:
            return "Escala de origem inválida!";

    }

    // Agora convertemos de Celsius para a escala de destino desejada
    switch ($destino){

        case "celsius":
            $resultado = $emCelsius;
            break;

        case "fahrenheit":
            $resultado = ($emCelsius * 9 / 5) + 32;
            break;

        case "kelvin":
            $resultado = $emCelsius + 273.15;
            break;

        default:
            return "Escala de destino inválida!";

    }

    return $resultado;

}

$valor_usuario = 100;
$origem_usuario = "celsius";
$destino_usuario = "fahrenheit";

echo "$valor_usuario graus $origem_usuario equivalem a: ";
echo converterTemperatura($valor_usuario, $origem_usuario, $destino_usuario);
echo " graus $destino_usuario <br>";

?>