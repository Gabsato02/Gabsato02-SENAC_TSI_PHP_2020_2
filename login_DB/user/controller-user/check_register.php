<?php

// Convertendo o e-mail para lowercase
$login = strtolower($_POST['login']) ?? null;
// Removendo os espaços antes e depois da senha
$password = trim($_POST['password']) ?? null;
$passwordCheck = $_POST['passwordCheck'] ?? null;

$errors = [];

// Verificando se o e-mail é válido
if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
    
    $errors[] = 'Formato de e-mail inválido';

} elseif (emailCheck($login) && !isset($_POST['update'])) {

    $errors[] = 'E-mail já cadastrado!';
}

// Verificando se a senha tem 8 caracteres
strlen($password) < 8 ? $errors[] = 'A senha precisa ter no mínimo 8 caracteres.' : null;

// Verificando se a confirmação de senha bate com a senha
$password !== $passwordCheck ? $errors[] = 'Confirmação de senha inválida.' : null;