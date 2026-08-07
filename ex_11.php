<?php

// Uma empresa deseja padronizar automaticamente seus relatórios.
// Crie uma função chamada formatarTexto() que receba um texto e retorne:
// O texto totalmente em letras maiúsculas;
// O texto totalmente em letras minúsculas;
// A primeira letra de cada palavra em maiúscula;
// A quantidade total de caracteres.

function formatarTexto($texto){

    // strtoupper() deixa tudo em maiúsculo
    $maiusculo = strtoupper($texto);

    // strtolower() deixa tudo em minúsculo
    $minusculo = strtolower($texto);

    // ucwords() deixa a primeira letra de cada palavra em maiúscula
    $primeiraLetraMaiuscula = ucwords(strtolower($texto));

    // strlen() conta a quantidade total de caracteres
    $quantidadeCaracteres = strlen($texto);

    return [
        "maiusculo" => $maiusculo,
        "minusculo" => $minusculo,
        "capitalizado" => $primeiraLetraMaiuscula,
        "quantidade_caracteres" => $quantidadeCaracteres
    ];

}

$texto_usuario = "relatório de vendas do mês";

$resultado = formatarTexto($texto_usuario);

echo "Texto original: $texto_usuario <br>";
echo "Maiúsculo: " . $resultado["maiusculo"] . "<br>";
echo "Minúsculo: " . $resultado["minusculo"] . "<br>";
echo "Capitalizado: " . $resultado["capitalizado"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade_caracteres"] . "<br>";

?>