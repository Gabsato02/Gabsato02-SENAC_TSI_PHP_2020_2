<?php

chdir(__DIR__);

require_once '../../db.php';

// Uso de parâmetro opcional
function listData(int $id = null): array
{
    global $db;

    // Utilizando o parâmetro opcional como forma de alterar a query
    if (is_null($id)) {

        $param = '';
    } else {

        $param = 'WHERE id = ' . preg_replace('/\D/', '', $id);
    }

    $sqlQuery = $db->query("SELECT id, email, senha FROM usuario $param");
    $reg = $sqlQuery->fetchAll();

    return is_array($reg) ? $reg : [];
}

function emailCheck(string $email): bool
{

    if (empty($email)) return false;

    global $db;

    $sqlQuery = $db->prepare("SELECT COUNT(*) FROM usuario WHERE email = :email");

    $sqlQuery->bindParam(':email', $email);

    $sqlQuery->execute();

    $register = $sqlQuery->fetchColumn();

    return $register;
}

function register_user(string $email, string $password): ?int
{

    global $db;

    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $db->prepare('INSERT INTO 
                                 usuario (email, senha)
                                 VALUES
                                 (:email, :pass)');

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $password);

    $stmt->execute();

    return $db->lastInsertId();
}

function delete_user(int $id): bool
{

    if (is_numeric($id)) {

        global $db;

        if ($db->exec("DELETE FROM usuario WHERE id = $id") > 0) {

            return true;
        } else {

            return false;
        }
    } else {

        return false;
    }
}

function edit_user(int $id, string $email, string $password): bool
{
    global $db;

    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $db->prepare('UPDATE usuario
                                 SET :email, :pass
                                 WHERE id = :id');

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $password);
    $stmt->bindParam(':id', $id);

    return $stmt->execute();
}
