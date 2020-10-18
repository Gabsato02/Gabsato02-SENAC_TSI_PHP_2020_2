<?php

session_start();

$credentials = [
    0 => ['user' => 'sato@senac.br', 'password' => '123'],
    1 => ['user' => 'kaue@senac.br', 'password' => '456'],
    2 => ['user' => 'gustavo@senac.br', 'password' => '321']
];

if (isset($_SESSION['user'])) { // Caso já esteja logado

    include 'header_tpl.php';
    include 'index_menu_tpl.php';
    include 'footer_tpl.php';

} elseif (isset($_POST['enter'])) { // Caso esteja preenchendo o login

    $login = $_POST['login'];
    $password = $_POST['password'];


    if (in_array(['user' => $login, 'password' => $password], $credentials)) {

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
