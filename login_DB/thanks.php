<?php

require 'session.php';

$user = $_SESSION['user'];

$npsGrade = $_GET['nps'];

include 'header_tpl.php';
include 'index_menu_tpl.php';
include 'footer_tpl.php';

if ($npsGrade >= 9) {
    echo "Obrigado, $user! Estamos felizes por sua avaliação :)";
} else {
    echo "$user, conte-nos como podemos ganhar sua nota 10!";
}

