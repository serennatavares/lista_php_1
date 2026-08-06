<?php

function textoMaiusculo($texto){
    return strtoupper($texto);
}

function textoMinusculo($texto){
    return strtolower($texto);
}

function primeiraMaiuscula($texto){
    return ucwords(strtolower($texto));
}

function contarCaracteres($texto){
    return strlen($texto);
}

function formatarTexto($texto){

    return [
        "maiusculo" => textoMaiusculo($texto),
        "minusculo" => textoMinusculo($texto),
        "primeiraMaiuscula" => primeiraMaiuscula($texto),
        "caracteres" => contarCaracteres($texto)
    ];
}

$texto = "o php é uma linguagem de programação.";

$resultado = formatarTexto($texto);

echo "Texto em maiúsculas: " . $resultado["maiusculo"] . "<br>";
echo "Texto em minúsculas: " . $resultado["minusculo"] . "<br>";
echo "Primeira letra maiúscula: " . $resultado["primeiraMaiuscula"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["caracteres"] . "<br>";

?>