<?php

session_start();

require_once 'db.php';

/* 
INSERÇÃO DE SENHA CRIPTOGRAFADA

$password = password_hash('admin', PASSWORD_DEFAULT);

$sqlQuery = $db->query("INSERT INTO usuario (email, senha) VALUES ('admin@admin.com','$password')"); */

if (isset($_SESSION['user'])) { // Caso já esteja logado

    include 'header_tpl.php';
    include 'index_menu_tpl.php';
    include 'footer_tpl.php';

} elseif (isset($_POST['enter'])) { // Caso esteja preenchendo o login

    // Outra forma de evitar o SQL Injection é o Filter Var
    $login = filter_var($_POST['login'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $sqlQuery = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
    
    $reg = $sqlQuery -> fetch(PDO::FETCH_ASSOC);
    $hash = $reg['senha'];

    if (password_verify($password, $hash)) {

        $_SESSION['user'] = $login;

        include 'header_tpl.php';
        include 'index_menu_tpl.php';
        include 'footer_tpl.php';
        
    } else {

        $message = 'Credenciais inválidas! Tente novamente!';

        include 'index_tpl.php';
    }
} else { // Caso tenha acabado de chegar no sistema

    include 'index_tpl.php';
}
