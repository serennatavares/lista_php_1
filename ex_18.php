<?php

function totalConsultas($agenda){
    return count($agenda);
}

function pacientesDiferentes($agenda){
    $pacientes = [];

    foreach($agenda as $consulta){
        $pacientes[] = $consulta["paciente"];
    }

    return count(array_unique($pacientes));
}

function contarEspecialidades($agenda){

    $especialidades = [];

    foreach($agenda as $consulta){
        $especialidades[] = $consulta["especialidade"];
    }

    return array_count_values($especialidades);
}

function ordenarHorario($agenda){

    usort($agenda, function($a, $b){
        return strcmp($a["horario"], $b["horario"]);
    });

    return $agenda;
}

function pesquisarPaciente($agenda, $nome){

    foreach($agenda as $consulta){
        if(strtolower($consulta["paciente"]) == strtolower($nome)){
            return $consulta;
        }
    }

    return "Paciente não encontrado.";
}

function horariosDuplicados($agenda){

    $horarios = [];

    foreach($agenda as $consulta){
        $horarios[] = $consulta["horario"];
    }

    return count($horarios) != count(array_unique($horarios));
}

function organizarAgenda($agenda, $paciente){

    $ordenada = ordenarHorario($agenda);

    return [
        "totalConsultas" => totalConsultas($agenda),
        "pacientesDiferentes" => pacientesDiferentes($agenda),
        "especialidades" => contarEspecialidades($agenda),
        "primeiroAtendimento" => $ordenada[0],
        "ultimoAtendimento" => $ordenada[count($ordenada)-1],
        "agendaOrdenada" => $ordenada,
        "pesquisa" => pesquisarPaciente($agenda, $paciente),
        "horariosDuplicados" => horariosDuplicados($agenda)
    ];
}

// Agenda
$agenda = [

    [
        "paciente" => "Ana",
        "especialidade" => "Cardiologia",
        "data" => "06/08/2026",
        "horario" => "08:00"
    ],

    [
        "paciente" => "Carlos",
        "especialidade" => "Pediatria",
        "data" => "06/08/2026",
        "horario" => "10:30"
    ],

    [
        "paciente" => "Maria",
        "especialidade" => "Cardiologia",
        "data" => "06/08/2026",
        "horario" => "09:00"
    ],

    [
        "paciente" => "Ana",
        "especialidade" => "Dermatologia",
        "data" => "06/08/2026",
        "horario" => "10:30"
    ]

];

$resultado = organizarAgenda($agenda, "Ana");

echo "Total de consultas: " . $resultado["totalConsultas"] . "<br>";
echo "Pacientes diferentes: " . $resultado["pacientesDiferentes"] . "<br>";

echo "<br>Consultas por especialidade:<br>";
foreach($resultado["especialidades"] as $esp => $qtd){
    echo $esp . ": " . $qtd . "<br>";
}

echo "<br>Primeiro atendimento: " . $resultado["primeiroAtendimento"]["paciente"] . " - " . $resultado["primeiroAtendimento"]["horario"] . "<br>";

echo "Último atendimento: " . $resultado["ultimoAtendimento"]["paciente"] . " - " . $resultado["ultimoAtendimento"]["horario"] . "<br>";

echo "<br>Agenda ordenada:<br>";
foreach($resultado["agendaOrdenada"] as $consulta){
    echo $consulta["horario"] . " - " . $consulta["paciente"] . "<br>";
}

echo "<br>Pesquisa do paciente:<br>";

if(is_array($resultado["pesquisa"])){
    echo $resultado["pesquisa"]["paciente"] . " - " . $resultado["pesquisa"]["especialidade"];
}else{
    echo $resultado["pesquisa"];
}

echo "<br><br>Horários duplicados: ";

if($resultado["horariosDuplicados"]){
    echo "Sim";
}else{
    echo "Não";
}

?>

?>