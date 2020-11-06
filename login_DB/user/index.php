<?php 

require '../session.php';

require 'model-user/data.php';

// Seta o diretório atual pra que seja o mesmo da execução do script
chdir(__DIR__);
$list = listData();

require 'view-user/userList.php';