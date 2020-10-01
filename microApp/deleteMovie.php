<?php

require_once 'db.php';

echo '<pre>';

// Evita o SQL injection, pois permite apenas que dígitos numéricos inteiros sejam passados
$id = preg_replace('/\D/','',$_GET['id']);


if ($objDatabase->exec("DELETE FROM movie WHERE id = $id") !== false) {
    $deleteMsg = "Registro $id apagado com sucesso.";
} else {
    $deleteMsg = "Erro ao apagar o registro $id.";
}

include 'deleteMovie_tpl.php';