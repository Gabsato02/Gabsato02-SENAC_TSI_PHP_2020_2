<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db.php';

/* Evitando SQL injection

With bound parameters, you say to the SQL server "Hey look, this is the query, 
and I expect parameters here, here and there. Oh and btw, here are the values". 
This approach is different because SQL now knows the actual expression it has 
to execute and what the values are. This allows SQL to insert the values into 
the expression, without modifying the expression itself.

*/
// O ? indica que vai ser passado um valor
$objStatement = $objDatabase->prepare('INSERT INTO movie (title, director, genre) VALUES ( :title , :director, :genre )');

// bindParam substitui o que foi inserido pelo usuário na consulta pelo que foi passado pelo POST
$objStatement->bindParam(':title', $_POST['title']);
$objStatement->bindParam(':director', $_POST['director']);
$objStatement->bindParam(':genre', $_POST['genre']);

if ($objStatement->execute()) {
    $message = 'Obrigado por cadastrar!';
} else {
    $message = '';
}

// Listar a base

$table = array();

$list_sql = 'SELECT id, title, director, genre FROM movie ORDER BY title';

// Para cada item da consulta acima, será adicionado uma posição no vetor $table
foreach ($objDatabase->query($list_sql) as $register) {

    $table[$register['id']] = ['title' => $register['title'], 'director' => $register['director'], 'genre' => $register['genre']];
}

// Chama o frontend
include 'addMovie_tpl.php';
