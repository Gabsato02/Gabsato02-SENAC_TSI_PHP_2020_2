<?php

include '../header_tpl.php';
include '../index_menu_tpl.php';

echo "
    <center>
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
        </tr>
         ";
}

include '../footer_tpl.php';