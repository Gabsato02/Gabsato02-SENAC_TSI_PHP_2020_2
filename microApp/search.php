<?php

require_once 'db.php';

$searchFilter = $_GET['searchFilter'];
$searchText = $_GET['search'];

switch ($searchFilter) {
    case 'director':
        $filter = 'director';
        break;
    case 'genre':
        $filter = 'genre';
        break;
    case 'title':
        $filter = 'title';
        break;
    default:
    echo "Filtro de consulta não encontrado.";
}

$sql = "SELECT title, director, genre FROM movie WHERE $filter like :search";

$objStatement = $objDatabase->prepare($sql);
$objStatement->bindValue(':search', "%$searchText%");
$objStatement->execute();

$table = array();

foreach ($objStatement as $key => $searchResult) {
    $table[$key] = ['title' => $searchResult['title'], 'director' => $searchResult['director'], 'genre' => $searchResult['genre']];
}

include 'search_tpl.php';
