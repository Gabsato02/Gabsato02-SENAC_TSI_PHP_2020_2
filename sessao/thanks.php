<?php

session_start();

$user = $_SESSION['user'];

$npsGrade = $_GET['nps'];

if ($npsGrade >= 9) {
    echo "Obrigado, $user! Estamos felizes por sua avaliação :)";
} else {
    echo "$user, conte-nos como podemos ganhar sua nota 10!";
}

