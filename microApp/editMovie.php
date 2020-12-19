<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Chama o Banco de Dados
require_once 'db.php';

// Se for clicado o botão Editar, faça o Update
if (isset($_POST['id'])) {

    // Preparando a consulta SQL para evitar injection
    $id = preg_replace('/\D/', '', $_POST['id']);
    $title = $_POST['title'];
    $director = $_POST['director'];
    $genre = $_POST['genre'];

    $objStatement = $objDatabase->prepare('UPDATE movie 
                                             SET title = :title , 
                                                director = :director, 
                                                genre = :genre 
                                             WHERE 
                                                id = :id');

    $objStatement->bindParam(':id', $id);
    $objStatement->bindParam(':title', $title);
    $objStatement->bindParam(':director', $director);
    $objStatement->bindParam(':genre', $genre);

    if ($objStatement->execute()) {
        $message = 'Editado com sucesso!';
    } else {
        $message = '';
    }
}


$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;

// Prepara a variável ID para evitar SQL Injection
$id = preg_replace('/\D/', '', $_GET['id']);

$movie = array();

// Consulta no BD conforme o ID recebido
$list_sql = "SELECT id, title, director, genre FROM movie WHERE id = $id";

// Para cada item da consulta acima, será adicionado uma posição no vetor $movie
foreach ($objDatabase->query($list_sql) as $register) {

    $movie = $register;
}

include 'editMovie_tpl.php';


