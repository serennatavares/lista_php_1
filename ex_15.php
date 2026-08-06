<?php
function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

function validarEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? "Válido" : "Inválido";
}

function gerarSenha($tamanho){

    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    $senha = "";

    for($i = 0; $i < $tamanho; $i++){
        $senha .= $caracteres[rand(0, strlen($caracteres)-1)];
    }

    return $senha;
}

function contarVogais($texto){

    preg_match_all('/[aeiouAEIOU]/', $texto, $resultado);

    return count($resultado[0]);
}

function inverterTexto($texto){
    return strrev($texto);
}

/function calcularIdade($anoNascimento){

    $anoAtual = date("Y");

    return $anoAtual - $anoNascimento;
}

function converterMoeda($valor){

    return "R$ " . number_format($valor, 2, ",", ".");
}

function formatarTelefone($telefone){

    return "(" . substr($telefone,0,2) . ") " .
           substr($telefone,2,5) . "-" .
           substr($telefone,7);
}

function saudacao(){

    $hora = date("H");

    if($hora < 12){
        return "Bom dia";
    } elseif($hora < 18){
        return "Boa tarde";
    } else{
        return "Boa noite";
    }
}

function validarSenhaForte($senha){

    if(
        strlen($senha) >= 8 &&
        preg_match('/[A-Z]/', $senha) &&
        preg_match('/[a-z]/', $senha) &&
        preg_match('/[0-9]/', $senha) &&
        preg_match('/[^a-zA-Z0-9]/', $senha)
    ){
        return "Senha forte";
    }

    return "Senha fraca";
}

?>