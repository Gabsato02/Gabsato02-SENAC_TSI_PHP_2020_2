<?php

require 'model-user/data.php';

if (isset($_POST['register'])) {

    require 'controller-user/check_register.php';

    $id = register_user($_POST['login'], $_POST['password']);

    if ($id) {

        session_start();

        $_SESSION['user'] = $_POST['login'];

        header('Location: ../');

    } else {

        $errors = ['Não foi possível criar seu acesso.'];
    }

} else {
    $errors = [];
}

include 'view-user/register_tpl.php';
