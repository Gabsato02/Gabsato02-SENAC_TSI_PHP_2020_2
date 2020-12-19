<?php

require_once "db.php";

// Evitando SQL injection
// O ? indica que vai ser passado um valor
$objStatement = $objDatabase -> prepare('INSERT INTO movie (title, director, genre) VALUES ( :title , :director, :genre )');

// bindParam substitui o que foi inserido pelo usuário na consulta pelo que foi passado pelo POST
$objStatement->bindParam(':title', $_POST['title']);
$objStatement->bindParam(':director', $_POST['director']);
$objStatement->bindParam(':genre', $_POST['genre']);

if ($objStatement->execute() ) {
    $message = "Obrigado por cadastrar!";
} else {
    $message = ":( deu erro. Tente novamente.";
}

// Chama o frontend
include 'addMovie_tpl.php';

