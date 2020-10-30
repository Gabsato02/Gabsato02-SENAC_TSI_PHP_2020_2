<?php

// Chamando as constantes definidas anteriormente
require_once "config.php";

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
