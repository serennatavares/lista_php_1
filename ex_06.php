<?php
//Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes
//escalas.
//Crie uma função chamada converterTemperatura() que receba um valor, a escala
//de origem e a escala de destino.
//A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin.

function converterTemperatura($valor, $escalaOrigem, $escalaDestino) {

    if($escalaOrigem == "C" && $escalaDestino == "F"){
        return ($valor * 9 / 5) + 32;
    }

    if($escalaOrigem == "F" && $escalaDestino == "C"){
        return ($valor - 32) * 5 / 9;
    }

    if($escalaOrigem == "C" && $escalaDestino == "K"){
        return $valor + 273.15;
    }

    if($escalaOrigem == "K" && $escalaDestino == "C"){
        return $valor - 273.15;
    }

    if($escalaOrigem == "F" && $escalaDestino == "K"){
        return ($valor - 32) * 5 / 9 + 273.15;
    }

    if($escalaOrigem == "K" && $escalaDestino == "F"){
        return ($valor - 273.15) * 9 / 5 + 32;
    }

}

echo "Resultado da conversão de 30°C para Fahrenheit: ";
echo converterTemperatura(30, "C", "F");
?>