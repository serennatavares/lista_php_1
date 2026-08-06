<?php

function produtoMaisCaro($produtos){

    $maisCaro = $produtos[0];

    foreach($produtos as $produto){
        if($produto["preco"] > $maisCaro["preco"]){
            $maisCaro = $produto;
        }
    }

    return $maisCaro;
}

function produtoMaisBarato($produtos){

    $maisBarato = $produtos[0];

    foreach($produtos as $produto){
        if($produto["preco"] < $maisBarato["preco"]){
            $maisBarato = $produto;
        }
    }

    return $maisBarato;
}

function mediaPrecos($produtos){

    $soma = 0;

    foreach($produtos as $produto){
        $soma += $produto["preco"];
    }

    return $soma / count($produtos);
}

function pesquisarProduto($produtos, $nome){

    foreach($produtos as $produto){
        if(strtolower($produto["nome"]) == strtolower($nome)){
            return $produto;
        }
    }

    return "Produto não encontrado.";
}

function analisarProdutos($produtos, $nome){

    return [
        "maisCaro" => produtoMaisCaro($produtos),
        "maisBarato" => produtoMaisBarato($produtos),
        "media" => mediaPrecos($produtos),
        "pesquisa" => pesquisarProduto($produtos, $nome)
    ];
}

$produtos = [

    [
        "nome" => "Arroz",
        "preco" => 25
    ],

    [
        "nome" => "Feijão",
        "preco" => 10
    ],

    [
        "nome" => "Macarrão",
        "preco" => 8
    ],

    [
        "nome" => "Carne",
        "preco" => 40
    ]

];

$resultado = analisarProdutos($produtos, "Feijão");

echo "Produto mais caro: " . $resultado["maisCaro"]["nome"] . " - R$ " . $resultado["maisCaro"]["preco"] . "<br>";

echo "Produto mais barato: " . $resultado["maisBarato"]["nome"] . " - R$ " . $resultado["maisBarato"]["preco"] . "<br>";

echo "Média dos preços: R$ " . $resultado["media"] . "<br>";

echo "Pesquisa do produto:<br>";

if(is_array($resultado["pesquisa"])){
    echo $resultado["pesquisa"]["nome"] . " - R$ " . $resultado["pesquisa"]["preco"];
}else{
    echo $resultado["pesquisa"];
}

?>