<?php
include 'include/config.inc.php';
include $arrConfig['dir_site'].'/include/auth.inc.php';

session_destroy();

header('Location: '.$arrConfig['url_site'].'/index.php');
exit();
?>