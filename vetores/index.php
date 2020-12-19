<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// ARRAY

// VAR_DUMP mostra informações sobre a variável

// Define qual zona de horário está sendo usada
date_default_timezone_set("America/Sao_Paulo");

$weekDays = "Dias da semana";

// Unset destrói a variável
unset($weekDays);

$weekDays = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

// Pode-se usar o . para concatenar
echo ("Hoje é " . date("d/m/yy") . ", " . $weekDays[date("w")] . "<br><br>");

$usuario = [
    'nome'     =>     'Luiz Bono',
    'idade'    =>    25,
    'peso'    =>    67.8,
    'signo'    =>    'aquariano'
];

// Number_Format formata o número como desejado. Os parâmetros são (variável, quantidade de casas decimais, separador de decimal, separador de milhar)
$usuario['peso'] = number_format($usuario['peso'], 2, ',', '.');

// O uso de aspas duplas + chaves protegendo a variável permitem concatenater textos e variáveis, como em uma template string
echo "O professor {$usuario['nome']}  tem {$usuario['idade']} anos, pesa {$usuario['peso']} kg e é {$usuario['signo']}.<br><br>";

// Define cria uma CONSTANTE. O primeiro parâmetro é o nome e o segundo é o valor. A convenção é que o nome da constante sempre seja em maiúsculo.
define("NOMEPLANETA", "Terra<br><br>");
echo NOMEPLANETA;

// Declaração de matriz
$professores = array(
    0 => array(
        "nome" => "Luiz Bono",
        "idade" => 25,
        "peso" => 70,
        "signo" => "aquariano"
    ),

    1 => array(
        "nome" => "Thiago Claro",
        "idade" => 23,
        "peso" => 75,
        "signo" => "geminiano"
    ),

    2 => array(
        "nome" => "Thyago Quintas",
        "idade" => 26,
        "peso" => 73,
        "signo" => "pisciano"
    )
);

?>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>Peso</td>
        <td>Signo</td>
    </tr>

    <?php

    // FOR EACH - Para cada item de professores em determinado index => valor
    foreach ($professores as $linha => $professor) {
        echo "<tr>
            <td>    $linha  </td>
            <td>    {$professor['nome']}  </td>
            <td>    {$professor['idade']} </td>
            <td>    {$professor['peso']}  </td>
            <td>    {$professor['signo']} </td>
    </tr>";
    }

    ?>

</table>