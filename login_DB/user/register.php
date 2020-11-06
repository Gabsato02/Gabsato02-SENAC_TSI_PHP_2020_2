<?php

require 'model-user/data.php';

if(isset($_POST['cadastrar'])) {

require 'controller-user/check_register.php';

}

include 'view-user/register_tpl.php';