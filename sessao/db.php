<?php

// Chamando as constantes definidas anteriormente
require_once "config.php";

// Tente X comando
try {
    $objDatabase = new PDO(DSN, DBUSER, DBPASSWORD);
} 
// Caso dê erro retorna a classe de exceção PDOException sendo instanciada no $objErro
catch (PDOException $objError) {
    // Usando o método getMessage pra receber a mensagem de erro
    echo 'SGBD indisponível - Erro ' . $objError -> getMessage();
}