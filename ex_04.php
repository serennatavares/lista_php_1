<?php

//Uma empresa deseja gerar senhas temporárias para seus colaboradores.
//Crie uma função chamada gerarSenha() que receba a quantidade de caracteres
//desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas,
//números e caracteres especiais.

function gerarSenha($quantidadeCaracteres) {
    $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $caracteresEspeciais = '!@#$%^&*';

    $caracteres = $letrasMaiusculas . $letrasMinusculas . $numeros . $caracteresEspeciais;

    $senha = '';
    for ($i = 0; $i < $quantidadeCaracteres; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

$quantidadeCaracteres = 10; 
$senhaGerada = gerarSenha($quantidadeCaracteres);
echo $senhaGerada;
?>
