<?php

// Um supermercado deseja organizar automaticamente seu catálogo de produtos.
// Crie uma função chamada analisarProdutos() que receba um vetor contendo o
// nome e o preço dos produtos. A função deverá retornar:
// Produto mais caro; Produto mais barato; Média dos preços;
// Pesquisa de um produto informado pelo usuário.

function analisarProdutos($produtos, $produtoPesquisado){

    // Começamos usando o primeiro produto do vetor como referência inicial
    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $somaPrecos = 0;
    $produtoEncontrado = null;

    // Percorremos todo o vetor de produtos (vetor multidimensional: nome + preço)
    foreach ($produtos as $produto){

        if ($produto["preco"] > $maisCaro["preco"]){
            $maisCaro = $produto;
        }

        if ($produto["preco"] < $maisBarato["preco"]){
            $maisBarato = $produto;
        }

        $somaPrecos += $produto["preco"];

        // Compara o nome (ignorando maiúsculas/minúsculas) com o que o usuário pesquisou
        if (strtolower($produto["nome"]) == strtolower($produtoPesquisado)){
            $produtoEncontrado = $produto;
        }

    }

    $mediaPrecos = $somaPrecos / count($produtos);

    return [
        "mais_caro" => $maisCaro,
        "mais_barato" => $maisBarato,
        "media_precos" => $mediaPrecos,
        "pesquisado" => $produtoEncontrado
    ];

}

// Vetor multidimensional: cada posição é um produto com "nome" e "preco"
$produtos_usuario = [
    ["nome" => "Arroz", "preco" => 25.90],
    ["nome" => "Feijão", "preco" => 8.50],
    ["nome" => "Óleo", "preco" => 12.00],
    ["nome" => "Carne", "preco" => 45.00]
];

$resultado = analisarProdutos($produtos_usuario, "Carne");

echo "Produto mais caro: " . $resultado["mais_caro"]["nome"] . " - R$ " . $resultado["mais_caro"]["preco"] . "<br>";
echo "Produto mais barato: " . $resultado["mais_barato"]["nome"] . " - R$ " . $resultado["mais_barato"]["preco"] . "<br>";
echo "Média dos preços: R$ " . number_format($resultado["media_precos"], 2, ",", ".") . "<br>";

if ($resultado["pesquisado"]){
    echo "Produto pesquisado encontrado: " . $resultado["pesquisado"]["nome"] . " - R$ " . $resultado["pesquisado"]["preco"] . "<br>";
} else {
    echo "Produto pesquisado não encontrado.<br>";
}

?>