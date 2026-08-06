<?php

function letrasMaiusculas($senha){
    preg_match_all('/[A-Z]/', $senha, $resultado);
    return count($resultado[0]);
}

function letrasMinusculas($senha){
    preg_match_all('/[a-z]/', $senha, $resultado);
    return count($resultado[0]);
}

function contarNumeros($senha){
    preg_match_all('/[0-9]/', $senha, $resultado);
    return count($resultado[0]);
}

function contarCaracteresEspeciais($senha){
    preg_match_all('/[^a-zA-Z0-9]/', $senha, $resultado);
    return count($resultado[0]);
}

function classificarSenha($senha){

    $tamanho = strlen($senha);
    $maiusculas = letrasMaiusculas($senha);
    $minusculas = letrasMinusculas($senha);
    $numeros = contarNumeros($senha);
    $especiais = contarCaracteresEspeciais($senha);

    $criterios = 0;

    if ($tamanho >= 8) $criterios++;
    if ($maiusculas > 0) $criterios++;
    if ($minusculas > 0) $criterios++;
    if ($numeros > 0) $criterios++;
    if ($especiais > 0) $criterios++;

    if ($criterios <= 2){
        return "Fraca";
    } elseif ($criterios == 3){
        return "Média";
    } elseif ($criterios == 4){
        return "Forte";
    } else {
        return "Muito forte";
    }
}

function analisarSenha($senha){

    return [
        "maiusculas" => letrasMaiusculas($senha),
        "minusculas" => letrasMinusculas($senha),
        "numeros" => contarNumeros($senha),
        "especiais" => contarCaracteresEspeciais($senha),
        "tamanho" => strlen($senha),
        "nivel" => classificarSenha($senha)
    ];
}

$senha = "labubu@hikaru1114";

$resultado = analisarSenha($senha);

echo "Maiúsculas: " . $resultado["maiusculas"] . "<br>";
echo "Minúsculas: " . $resultado["minusculas"] . "<br>";
echo "Números: " . $resultado["numeros"] . "<br>";
echo "Especiais: " . $resultado["especiais"] . "<br>";
echo "Tamanho: " . $resultado["tamanho"] . "<br>";
echo "Nível: " . $resultado["nivel"] . "<br>";

?>