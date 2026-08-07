<?php

// Uma empresa deseja gerar senhas temporárias para seus colaboradores.
// Crie uma função chamada gerarSenha() que receba a quantidade de caracteres
// desejada e retorne uma senha aleatória contendo letras maiúsculas,
// letras minúsculas, números e caracteres especiais.

function gerarSenha($tamanho){

    // Monta um "banco" com todos os caracteres possíveis para a senha
    $letrasMaiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $letrasMinusculas = "abcdefghijklmnopqrstuvwxyz";
    $numeros = "0123456789";
    $especiais = "!@#$%&*-+";

    $todosCaracteres = $letrasMaiusculas . $letrasMinusculas . $numeros . $especiais;

    // Quantidade total de caracteres disponíveis no banco acima
    $quantidadeDisponivel = strlen($todosCaracteres) - 1;

    $senha = "";

    // Sorteia, caractere por caractere, uma posição aleatória do banco de caracteres
    for ($i = 0; $i < $tamanho; $i++){
        $posicaoAleatoria = rand(0, $quantidadeDisponivel);
        $senha .= $todosCaracteres[$posicaoAleatoria];
    }

    return $senha;

}

$tamanho_usuario = 10;

echo "Senha gerada com $tamanho_usuario caracteres: " . gerarSenha($tamanho_usuario) . "<br>";

?>
