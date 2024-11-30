<?php
include '../config.inc.php';

$token = $_GET['token'];

$q= "SELECT * FROM tokens WHERE token ='".$token."'";
$token=my_query($q);

pr($token);

$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

echo $q= "SELECT * FROM utilizadores WHERE email ='".$token[0]['email']."'";
$r=my_query($q);

pr($r);

if($pwd1 == $pwd2){
    $newpwd = password_hash($pwd1, PASSWORD_DEFAULT);
    $qChange = "UPDATE utilizadores SET `password`= '".$newpwd."' WHERE email='".$token[0]['email']."'";
    $rChange = my_query($qChange);
}

if($rChange){
    header('Location: '.$arrConfig['url_site'].'/login.php?info=2');
}
exit();
?>