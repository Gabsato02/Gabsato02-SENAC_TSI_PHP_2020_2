<?php

// É possível selecionar o tipo de variável que você deseja no retorno
function diaDaSemana(float $dia): string
{
    switch ($dia) {
        case "1":
            return "Domingo";
        case "2":
            return "Segunda-feira";
        case "3":
            return "Terça-feira";
        case "4":
            return "Quarta-feira";
        case "5":
            return "Quinta-feira";
        case "6":
            return "Sexta-feira";
        case "7":
            return "Sábado";

        default: "Dia inválido. Use números de 1 a 7.";
    }
}

echo diaDaSemana(6) . "<br><br>";

$nome = "Gabriel Sato";

// O & antes do parâmetro permite que ela seja alterada fora do escopo da função
function mudarNome (string &$var): string {
    $var = "Outro nome";
    return $var;
}

echo "A função retornará: " . mudarNome($nome) . "<br>";

echo "E a variável será alterada para: $nome";
