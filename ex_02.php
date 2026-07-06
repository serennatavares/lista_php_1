<?php
//Uma empresa de tecnologia está desenvolvendo um sistema para tratamento de textos. 
//Crie uma função chamada inverterTexto() que receba uma string e retorne o texto
//completamente invertido.
//Além disso, exiba a quantidade de caracteres existentes na string original.

function inverterTexto($texto){
     // strrev() inverte byte a byte, o que quebra acentos e caracteres especiais
     // (em UTF-8, LETRAS COMO "ç" e "ã" ocupam mais de 1 byte).
     // por isso separamos o texto em um array de caracteres "de verdade" com 
     // preg_split() usando a flag "u" (Unicode/UTF-8).

     $Ccaracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);

     //array_reverse() inverte a ordem dos elementos do array
     $caracteresInvertidos = array_reverse($caracteres);

     //implode() junta os elementos do array em uma string
     $textoInvertido = implode('', $caracteresInvertidos);

     //mb_strlen() retorna a quantidade de caracteres da string, considerando acentos e caracteres especiais
        $quantidadeCaracteres = mb_strlen($texto);

    // Como a função só pode ter um return, devolvemos os dois valores
    // juntos dentro de um array associativo.
    return [
        "invertido" => $textoInvertido,
        "quantidade" => $quantidadeCaracteres
    ];
}
$texto_usuario = "Programação em PHP! @2024 #ç~ã";

echo "Texto original: $texto_usuario <br>";

resultado = inverterTexto($texto_usuario);

echo "Texto invertido: " . $resultado["invertido"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade"] . "<br>";

?>

