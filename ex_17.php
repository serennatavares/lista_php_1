<?php

function contarCaracteres($texto){
    return strlen($texto);
}

function contarPalavras($texto){
    return str_word_count($texto);
}

function contarFrases($texto){
    preg_match_all('/[.!?]/', $texto, $resultado);
    return count($resultado[0]);
}

function encontrarPalavras($texto){
    $palavras = explode(" ", trim($texto));

    $maior = $palavras[0];
    $menor = $palavras[0];

    foreach($palavras as $palavra){
        if(strlen($palavra) > strlen($maior)){
            $maior = $palavra;
        }

        if(strlen($palavra) < strlen($menor)){
            $menor = $palavra;
        }
    }

    return [
        "maior" => $maior,
        "menor" => $menor
    ];
}

function palavrasRepetidas($texto){
    $palavras = explode(" ", strtolower(trim($texto)));

    $contagem = array_count_values($palavras);

    $repetidas = 0;

    foreach($contagem as $quantidade){
        if($quantidade > 1){
            $repetidas++;
        }
    }

    return $repetidas;
}

function palavrasFrequentes($texto){
    $palavras = explode(" ", strtolower(trim($texto)));

    $contagem = array_count_values($palavras);

    arsort($contagem);

    return array_slice($contagem, 0, 5, true);
}

function removerEspacos($texto){
    return preg_replace('/\s+/', ' ', trim($texto));
}

function formatarTexto($texto){
    return ucwords(strtolower(removerEspacos($texto)));
}

function processarTexto($texto){

    $palavras = encontrarPalavras($texto);

    return [
        "caracteres" => contarCaracteres($texto),
        "palavras" => contarPalavras($texto),
        "frases" => contarFrases($texto),
        "maiorPalavra" => $palavras["maior"],
        "menorPalavra" => $palavras["menor"],
        "repetidas" => palavrasRepetidas($texto),
        "frequentes" => palavrasFrequentes($texto),
        "semEspacos" => removerEspacos($texto),
        "formatado" => formatarTexto($texto)
    ];
}

$texto = "Há seis meses, Hikaru desapareceu por uma semana. Agora, desconfiado de que algo esteja errado, 
Yoshiki, seu melhor amigo, o confronta e descobre a verdade atormentadora.";

$resultado = processarTexto($texto);

echo "Caracteres: " . $resultado["caracteres"] . "<br>";
echo "Palavras: " . $resultado["palavras"] . "<br>";
echo "Frases: " . $resultado["frases"] . "<br>";
echo "Maior Palavra: " . $resultado["maiorPalavra"] . "<br>";
echo "Menor Palavra: " . $resultado["menorPalavra"] . "<br>";
echo "Palavras Repetidas: " . $resultado["repetidas"] . "<br>";

echo "Cinco palavras mais frequentes:<br>";
foreach($resultado["frequentes"] as $palavra => $quantidade){
    echo $palavra . " = " . $quantidade . "<br>";
}

echo "Texto sem espaços: " . $resultado["semEspacos"] . "<br>";
echo "Texto formatado: " . $resultado["formatado"] . "<br>";
?>