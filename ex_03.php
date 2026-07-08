<?php

//Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
//Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os
//caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
//Retorne o CPF mascarado

function mascararCpf($cpf){


$ultimosQuatroDigitos = substr($cpf, -4);
$cpfMascarado = str_repeat('*', strlen($cpf) - 4) . $ultimosQuatroDigitos;
return $cpfMascarado;
}

$cpf = "12446744940";

echo mascararCpf($cpf);
?>