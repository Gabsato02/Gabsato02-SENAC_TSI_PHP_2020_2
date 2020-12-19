<?php
// Inicia a sessão
session_start();
// Destrói a sessão
session_destroy();
// Volta pro Index
header('Location: index.php');