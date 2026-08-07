<?php

// Uma empresa deseja proteger pequenas mensagens antes de armazená-las em seu sistema.
// Crie uma função chamada criptografarMensagem() que receba um texto e aplique uma
// criptografia utilizando o método da Cifra de César.
// Em seguida, crie outra função chamada descriptografarMensagem() capaz de
// recuperar o texto original.

function criptografarMensagem($texto, $deslocamento){

    // Utiliza a função auxiliar cifraDeCesar() para deslocar cada letra do texto
    return cifraDeCesar($texto, $deslocamento);

}

function descriptografarMensagem($textoCriptografado, $deslocamento){

    // Para descriptografar, basta aplicar o deslocamento contrário (negativo)
    return cifraDeCesar($textoCriptografado, -$deslocamento);

}

// Função auxiliar que realmente desloca cada letra do alfabeto
function cifraDeCesar($texto, $deslocamento){

    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++){

        $caractere = $texto[$i];

        if (ctype_upper($caractere)){
            // Letras maiúsculas: A(65) até Z(90)
            $posicao = (ord($caractere) - ord('A') + $deslocamento) % 26;
            // O PHP pode gerar módulo negativo, então garantimos que o valor fique entre 0 e 25
            $posicao = ($posicao + 26) % 26;
            $resultado .= chr($posicao + ord('A'));

        } elseif (ctype_lower($caractere)){
            // Letras minúsculas: a(97) até z(122)
            $posicao = (ord($caractere) - ord('a') + $deslocamento) % 26;
            $posicao = ($posicao + 26) % 26;
            $resultado .= chr($posicao + ord('a'));

        } else {
            // Espaços, números e pontuação permanecem sem alteração
            $resultado .= $caractere;
        }

    }

    return $resultado;

}

$mensagem_usuario = "Mensagem Secreta";
$deslocamento_usuario = 3;

echo "Mensagem original: $mensagem_usuario <br>";

$mensagemCriptografada = criptografarMensagem($mensagem_usuario, $deslocamento_usuario);
echo "Mensagem criptografada: $mensagemCriptografada <br>";

$mensagemOriginal = descriptografarMensagem($mensagemCriptografada, $deslocamento_usuario);
echo "Mensagem descriptografada: $mensagemOriginal <br>";

?>