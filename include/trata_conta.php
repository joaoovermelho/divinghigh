<?php
include 'config.inc.php';
include $arrConfig['dir_site'].'/include/login/auth.inc.php';

$id = $_SESSION['uid'];
$nome   = $_POST['nome'];
$apelido = $_POST['apelido'];
$phone = $_POST['phone'];
$usr    = $_POST['usr'];

//$pwd    = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$tabela = 'utilizadores';
$query  = "UPDATE $tabela SET nome = '$nome' , apelido = '$apelido' , telemovel = '$phone' , username = '$usr' WHERE id = '$id'";

if($nome AND $apelido AND $phone AND $usr){
    $res = my_query($query);
}else{
    header('Location: '.$arrConfig['url_site'].'/minhaconta.php?erro=1');
}

$query = "SELECT * FROM utilizadores WHERE username = '$usr'";
$res = my_query($query);

    $_SESSION['isLogin'] = $arrConfig['isLoginKey'];
    $_SESSION['uid'] = $res[0]['id'];
    $_SESSION['uname'] = $res[0]['nome'];
    $_SESSION['uapelido'] = $res[0]['apelido'];
    $_SESSION['uemail'] = $res[0]['email'];
    $_SESSION['uphone'] = $res[0]['telemovel'];
    $_SESSION['uusername'] = $res[0]['username'];
    $_SESSION['ufotografia'] = $res[0]['fotografia'];
    $_SESSION['uestado'] = $res[0]['estado'];





        
header('Location: '.$arrConfig['url_site'].'/minhaconta.php');
exit();
?>