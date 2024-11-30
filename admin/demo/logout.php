<?php
include '../../include/config.inc.php';
include $arrConfig['dir_admin'].'/include/auth.inc.php';

session_destroy();

header('Location: '.$arrConfig['url_admin'].'/login.php');
exit();
?>