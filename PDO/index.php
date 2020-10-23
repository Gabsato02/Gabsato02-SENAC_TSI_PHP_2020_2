<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

// Data source name
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;database=BD_PHP';
// Usuário que acessa o banco
$user = 'sa';
// Senha
$password = '210587';

// Tentar um novo PDO com os parâmetros acima, caso der erro apresentar mensagem
try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = $db -> query('SELECT * FROM cliente');

foreach ($sql as $registro) {
    echo "Nome: {$registro['nome']} e Telefone: {$registro['telefone']}<br>";
}