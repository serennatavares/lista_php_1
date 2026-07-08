<?php
//Uma editora deseja obter algumas informações sobre os textos enviados pelos
//autores.
//Crie uma função chamada analisarTexto() que receba um texto e retorne:
//● Quantidade de palavras;
//● Quantidade de caracteres;
//● Quantidade de vogais;
//● Quantidade de consoantes.


function analisarTexto($texto){

$quantidadePalavras = str_word_count($texto);
$quantidadeCaracteres = mb_strlen($texto);

$quantidadeVogais = preg_match_all('/[aeiouAEIOUáéíóúÁÉÍÓÚàèìòùÀÈÌÒÙãõÃÕâêîôûÂÊÎÔÛ]/u', $texto);
$quantidadeConsoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/u', $texto);

return $quantidadePalavras . " palavras, " . $quantidadeCaracteres . " caracteres, " . $quantidadeVogais . 
" vogais e " . $quantidadeConsoantes . " consoantes.";

}

$texto = 'O livro Hikaru ga Shinda Natsu é uma obra de ficção que segue a história de Hikaru Indou, que enfrenta a morte após um acidente, refletindo sobre sua vida e suas relações. A narrativa se desenrola em uma aldeia chamada Kubitachi, onde Hikaru desapareceu por uma semana e retorna sem memória do que ocorreu. A história explora temas de identidade e amizade, enquanto Yoshiki, 
seu amigo de infância, começa a questionar se Hikaru é realmente quem ele parece ser.';

echo $texto;
echo "<br><br>";
echo analisarTexto($texto);

?>