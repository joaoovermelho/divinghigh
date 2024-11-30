<?php
include 'config.inc.php';

$idUser = $_SESSION['uid'];
$oldpwd = $_POST['oldpwd'];
$newpwd1 = $_POST['newpwd1'];
$newpwd2 = $_POST['newpwd2'];

$q= "SELECT * FROM utilizadores WHERE id =".$idUser;
$r=my_query($q);

$confirmOldPwd = password_verify($oldpwd, $r[0]['password']);

if($confirmOldPwd){
    if($newpwd1 == $newpwd2){
        $newpwd = password_hash($newpwd1, PASSWORD_DEFAULT);
        $qChange = "UPDATE utilizadores SET `password`= '".$newpwd."' WHERE id=".$idUser;
        $rChange = my_query($qChange);
    }
}

if($rChange){
    header('Location: '.$arrConfig['url_site'].'/minhaconta.php?info=1&id=2');
}else{
    header('Location: '.$arrConfig['url_site'].'/minhaconta.php?erro=1&id=2');
}
exit();
?>