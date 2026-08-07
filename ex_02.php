<?php

// Uma empresa de tecnologia está desenvolvendo um sistema para tratamento de textos.
// Crie uma função chamada inverterTexto() que receba uma string e retorne o texto
// completamente invertido.
// Além disso, exiba a quantidade de caracteres existentes na string original.

function inverterTexto($texto){
    // strrev() inverte byte a byte, o que quebra acentos e caracteres especiais
    // (em UTF-8, letras como "ç" e "ã" ocupam mais de 1 byte).
    // Por isso separamos o texto em um array de caracteres "de verdade" com
    // preg_split() usando a flag "u" (Unicode/UTF-8).
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);

    // array_reverse() inverte a ordem dos itens do array de caracteres
    $caracteresInvertidos = array_reverse($caracteres);

    // implode() junta o array invertido de volta em uma única string
    $textoInvertido = implode('', $caracteresInvertidos);

    // mb_strlen() conta corretamente a quantidade de caracteres mesmo com
    // acentos e símbolos especiais (diferente de strlen(), que conta bytes)
    $quantidadeCaracteres = mb_strlen($texto);

     // Como a função só pode ter um "return", devolvemos os dois valores
    // juntos dentro de um array associativo
    return [
        "invertido" => $textoInvertido,
        "quantidade" => $quantidadeCaracteres
    ];

}

$texto_usuario = "Fuyuhiko Kuzuryu (九頭龍 冬彦), é aluno da classe 77-B da Hope's Peak Academy 
e participante da Killing School Trip apresentada em Danganronpa 2: Goodbye Despair e Danganronpa 2x2. Seu título é Ultimate Yakuza";

echo "Texto original: $texto_usuario <br>";

$resultado = inverterTexto($texto_usuario);

echo "Texto invertido: " . $resultado["invertido"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade"] . "<br>";

?>

