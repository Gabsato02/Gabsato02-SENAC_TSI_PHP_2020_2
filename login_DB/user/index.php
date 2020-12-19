<?php

require '../session.php';

require 'model-user/data.php';

// Seta o diretório atual pra que seja o mesmo da execução do script
chdir(__DIR__);

if (isset($_GET['delete'])) {

    if (!delete_user($_GET['delete'])) {
        $error = 'Erro ao apagar.';
    }
}

if (isset($_GET['edit'])) {
    
    $user = listData($_GET['edit']);
    $email = $user[0]['email'] ?? '';

    include '../header_tpl.php';
    include '../index_menu_tpl.php';
    require 'view-user/edit_tpl.php';
    include '../footer_tpl.php';

    exit();
}


if (isset($_POST['update'])) {

    require 'controller-user/check_register.php';

    if (count($errors) === 0) {

        if (!edit_user($_GET['edit'], $_POST['login'], $_POST['password'])) {
            $errors = ['Erro ao editar.'];
        } else {
            $editOutcome = true;
        }
    }

    include '../header_tpl.php';
    include '../index_menu_tpl.php';
    require 'view-user/edit_tpl.php';
    include '../footer_tpl.php';

    exit();
}

$list = listData();

require 'view-user/userList.php';
