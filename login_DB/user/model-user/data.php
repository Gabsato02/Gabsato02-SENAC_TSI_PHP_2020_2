<?php

chdir(__DIR__);

require_once '../../db.php';

function listData (): array {

    global $db;
    
    $sqlQuery = $db->query('SELECT id, email, senha FROM usuario');

    $reg = $sqlQuery -> fetchAll();
    
    return is_array($reg) ? $reg : [];
}

function emailCheck (string $email) : bool {

    if (empty($email)) return false;

    global $db;

    $sqlQuery = $db->prepare("SELECT COUNT(*) FROM usuario WHERE email = :email");

    $sqlQuery->bindParam(':email', $email);
    
    $sqlQuery->execute();

    $register = $sqlQuery->fetchColumn();

    return $register;
}