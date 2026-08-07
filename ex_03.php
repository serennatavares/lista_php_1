<?php

// Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
// Crie uma função chamada mascararCpf() que receba um CPF e substitua todos
// os caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
// Retorne o CPF mascarado.

function mascararCpf($cpf){

    // Remove qualquer caractere que não seja número (pontos e traço)
    $somenteNumeros = preg_replace("/[^0-9]/", "", $cpf);

    // Pega os 4 últimos dígitos, que devem continuar visíveis
    $ultimosQuatro = substr($somenteNumeros, -4);

    // Descobre quantos dígitos existem antes dos 4 últimos
    // para saber quantos asteriscos precisamos gerar
    $quantidadeOculta = strlen($somenteNumeros) - 4;

    // str_repeat() repete o caractere "*" a quantidade de vezes necessária
    $mascara = str_repeat("*", $quantidadeOculta);

    $cpfMascarado = $mascara . $ultimosQuatro;

    return $cpfMascarado;

}

$cpf_usuario = "123.456.789-10";

echo "CPF original: $cpf_usuario <br>";
echo "CPF mascarado: " . mascararCpf($cpf_usuario) . "<br>";

?>