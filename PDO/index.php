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

$sqlQuery = $db -> query('SELECT * FROM cliente');

/* -- INSERT

if ($db -> query("INSERT INTO cliente (nome, telefone) VALUES ('Dedão','12345678')")) {
    echo "Inserido com sucesso.";
 } else {
    echo "Falha ao inserir";
 } 
 
-- DELETE

if ($db -> query("DELETE FROM cliente WHERE nome = 'Dedão'")) {
    echo "Excluído com sucesso.";
 } else {
    echo "Falha ao excluir";
 }

-- UPDATE   

if ($db -> query("UPDATE cliente SET nome = 'Kaue' WHERE nome = 'Dedão'")) {
    echo "Atualizado com sucesso.<br>";
 } else {
    echo "Falha ao atualizar.<br>";
 } */

 foreach ($sqlQuery as $registro) {
    echo "Nome: {$registro['nome']}<br>Telefone: {$registro['telefone']}<br><br>";
}