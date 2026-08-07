<?php

// Uma editora deseja obter algumas informações sobre os textos enviados pelos autores.
// Crie uma função chamada analisarTexto() que receba um texto e retorne:
// Quantidade de palavras; Quantidade de caracteres; Quantidade de vogais; Quantidade de consoantes.

function analisarTexto($texto){

    // str_word_count() conta quantas palavras existem no texto
    $quantidadePalavras = str_word_count($texto);

    // strlen() conta a quantidade total de caracteres (incluindo espaços)
    $quantidadeCaracteres = strlen($texto);

    // Deixamos o texto em minúsculo para facilitar a comparação letra a letra
    $textoMinusculo = strtolower($texto);

    $quantidadeVogais = 0;
    $quantidadeConsoantes = 0;
    $vogais = ["a", "e", "i", "o", "u"];

    // Percorre o texto caractere por caractere
    for ($i = 0; $i < strlen($textoMinusculo); $i++){

        $caractere = $textoMinusculo[$i];

        // Verifica se o caractere é uma letra do alfabeto
        if (ctype_alpha($caractere)){

            if (in_array($caractere, $vogais)){
                $quantidadeVogais++;
            } else {
                $quantidadeConsoantes++;
            }

        }

    }

    return [
        "palavras" => $quantidadePalavras,
        "caracteres" => $quantidadeCaracteres,
        "vogais" => $quantidadeVogais,
        "consoantes" => $quantidadeConsoantes
    ];

}

$texto_usuario = "Estudar PHP todos os dias é o caminho para o sucesso";

$resultado = analisarTexto($texto_usuario);

echo "Texto: $texto_usuario <br>";
echo "Quantidade de palavras: " . $resultado["palavras"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["caracteres"] . "<br>";
echo "Quantidade de vogais: " . $resultado["vogais"] . "<br>";
echo "Quantidade de consoantes: " . $resultado["consoantes"] . "<br>";

?>