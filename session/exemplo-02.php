<?php

require_once('config.php');

session_unset($_SESSION['usu_login']);

echo $_SESSION['usu_login'];

?>