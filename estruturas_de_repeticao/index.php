<?php

// FOR - quando souber o número de repetições
echo "FOR<br>";

for ($i = 0, $j = 4; $i < 5; $i++, $j--) {

    echo "Linha: $i + $j = 4 <br>";
}

echo "<br> <br>";

// WHILE - quando não souber o número de repetições
echo "WHILE<br>";

$cont = 0;

while ($cont < 5) {

    echo "Linha $cont <br>";

    $cont++;
}

echo "<br> <br>";

// DO WHILE - quando houver a necessidade de executar pelo menos 1 vez
echo "DO WHILE<br>";

$a = 0;

do {

    echo "Linha $a <br>";
    $a++;
} while ($a < 5);

echo "<br> <br>";

// ARRAY

// VAR_DUMP mostra informações sobre a variável

// Define qual zona de horário está sendo usada
date_default_timezone_set("America/Sao_Paulo");

$weekDays = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

// Pode-se usar o . para concatenar
echo ("Hoje é " . $weekDays[date("w")]);