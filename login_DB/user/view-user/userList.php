<?php

include '../header_tpl.php';
include '../index_menu_tpl.php';

echo "
    <center>";

if (isset($error)) echo "<br><br><font color='red'>$error</font>";

echo "
    <table border='1' width='50%' style='margin-top: 100px; text-align: center;'>
        <thead>
            <th>ID</th>
            <th>E-mail</th>
        </thead>";

foreach ($list as $user) {
    echo "
        <tr>
            <td>{$user['id']}</td>
            <td>{$user['email']}</td>
            <td><a href='?delete={$user['id']}'>Apagar</a></td>
            <td><a href='?edit={$user['id']}'>Editar</a></td>
        </tr>
         ";
}

include '../footer_tpl.php';