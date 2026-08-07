<?php

// Uma plataforma de ensino deseja verificar algumas propriedades dos números
// informados pelos alunos. Crie uma função chamada analisarNumero() que receba
// um número inteiro e informe se ele é:
// Par ou ímpar; Primo ou não; Perfeito ou não.
// Retorne a todas essas informações.

function analisarNumero($numero){

    // PAR OU ÍMPAR
    // O operador % (módulo) retorna o resto da divisão. Se o resto por 2 for 0, é par.
    if ($numero % 2 == 0){
        $paridade = "Par";
    } else {
        $paridade = "Ímpar";
    }

    // PRIMO
    // Um número primo só é divisível por 1 e por ele mesmo.
    // Números menores que 2 nunca são primos.
    $ehPrimo = true;

    if ($numero < 2){
        $ehPrimo = false;
    } else {
        for ($i = 2; $i < $numero; $i++){
            if ($numero % $i == 0){
                $ehPrimo = false;
                break;
            }
        }
    }

    // PERFEITO
    // Um número é perfeito quando a soma de seus divisores (exceto ele mesmo)
    // é igual a ele mesmo. Exemplo: 6 = 1 + 2 + 3
    $somaDivisores = 0;

    for ($i = 1; $i < $numero; $i++){
        if ($numero % $i == 0){
            $somaDivisores += $i;
        }
    }

    $ehPerfeito = ($somaDivisores == $numero && $numero > 0);

    return [
        "paridade" => $paridade,
        "primo" => $ehPrimo ? "Sim" : "Não",
        "perfeito" => $ehPerfeito ? "Sim" : "Não"
    ];

}

$numero_usuario = 28;

$resultado = analisarNumero($numero_usuario);

echo "Número analisado: $numero_usuario <br>";
echo "Paridade: " . $resultado["paridade"] . "<br>";
echo "É primo? " . $resultado["primo"] . "<br>";
echo "É perfeito? " . $resultado["perfeito"] . "<br>";

?>