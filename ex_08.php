<?php

// Uma escola deseja organizar automaticamente a lista de alunos matriculados.
// Crie uma função chamada ordenarNomes() que receba uma string contendo nomes
// separados por vírgulas. A função deverá transformar os nomes em um vetor,
// remover espaços desnecessários, ordenar em ordem alfabética e retornar a lista organizada.

function ordenarNomes($nomesTexto){

    // explode() transforma a string em um vetor (array), quebrando o texto a cada vírgula
    $vetorNomes = explode(",", $nomesTexto);

    // Remove espaços desnecessários no início/fim de cada nome (trim)
    // array_map() aplica a função trim() em todos os itens do vetor de uma só vez
    $vetorNomes = array_map("trim", $vetorNomes);

    // sort() organiza o vetor em ordem alfabética
    sort($vetorNomes);

    return $vetorNomes;

}

$nomes_usuario = "Carlos,  ana ,  Bruno,fernanda ,Daniela";

echo "Lista original: $nomes_usuario <br>";

$listaOrganizada = ordenarNomes($nomes_usuario);

echo "Lista organizada: <br>";

// Percorre o vetor já ordenado e exibe cada nome
foreach ($listaOrganizada as $nome){
    echo "- $nome <br>";
}

?>