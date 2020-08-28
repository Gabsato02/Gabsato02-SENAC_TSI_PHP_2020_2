<?php

/* init_set("display_errors") - é um liga-desliga da exibição dos erros na saída do script. 
O ideal em servidores de produção é ela estar false no php.ini, para não dar detalhes dos problemas dos 
seus scripts para os usuários comuns. */
ini_set("display_errors", 1);

/* A mesma coisa do anterior, porém refere-se aos erros ocorridos na inicialização do PHP, e não a execução do script.
Mais ainda do que o ítem anterior, é preferencial que fique desabilitado, e só seja ligado para debug de alguma coisa 
mais séria que não foi identificada por outros meios. Para problemas normais no seu script, o display_errors já basta. */
ini_set("display_startup_errors", 1);

// Define o tipo de erro que será exibido, sendo o E_ALL para todos os erros, o ideal para o desenvolvimento.
error_reporting(E_ALL);

// Vai apresentar o erro de variável não definida
echo ("Olha $isso");

echo "<br><br>";

// IF básico
$clima = "quente";

if ($clima == "gelado") {
    echo ("Meu pé ta friooo!");
} else {
    echo ("Calor bagarai!");
}

echo "<br><br>";

// IF ternário (usando === para comparar valor e tipo)
$bool = "true";

$var = $bool === true ? '$bool é igual a true' : '$bool é diferente de true';

echo ($var);

echo "<br><br>";

/* STRPOS serve para localizar a posição (1° byte) de uma string em outra (localDeBusca, objetoDeBusca) - 
STRIPOS é a mesma coisa, mas case insensitive */
$frase = "Eu tenho um gato chamado Bob";

/* !== false porque nesse caso ele vai retornar 0, que a posição da string "Eu" na variável. Sendo assim, é necessário
que tanto o tipo quanto o valor sejam diferentes de falso para que o IF seja executado*/
if (strpos($frase, "Eu") !== false) {
    echo "Você tem um cachorro.";
} else {
    echo "Você não tem um cachorro.";
}

echo "<br><br>";

// SWITCH CASE

switch ($clima) {
    case "quente":
    case "tropical":
        echo "To derretendo!";
        break;

    case "frio":
        echo "Hmmm, friozinho gostoso!";
        break;

    case "gelado":
        echo "Pinguim tá de cachecol!";
        break;

    default:
        echo "Clima desconhecido.";
        break;
}
