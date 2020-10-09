<?php

session_start();

ini_set('display_errors', 1);
ini_set('display startup errors', 1);
error_reporting(E_ALL);

require_once 'db.php';

$NPSgrade = $_POST['nps'];
$observation = $_POST['observation'];

echo "Você deu a nota $NPSgrade pelo seguinte motivo: $observation";

$objStatement = $objDatabase -> prepare('INSERT INTO nps (npsgrade, observation) 
                                         VALUES (:npsGrade, :observation)');

$objStatement -> bindParam(':npsGrade', $NPSgrade);
$objStatement -> bindParam(':observation', $observation);


if ($objStatement -> execute()) {
    echo '<br><br>Obrigado pela avaliação!';
} else {
    echo '<br><br>Falha ao enviar a avaliação!';
}

echo "<br><br><a href='./thanks.php?nps=$NPSgrade'>Seguir</a>";