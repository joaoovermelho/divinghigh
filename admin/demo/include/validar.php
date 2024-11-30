<?php
include '../../../include/config.inc.php';

$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

//$query = "SELECT * FROM administradores WHERE username = '$usr' AND password = '$pwd'";
$query = "SELECT * FROM admin WHERE username = '$usr' AND ativo = '1'";
$res = my_query($query);

if(count($res)>0) {
    if(password_verify($pwd,$res[0]['password'])) {
        $_SESSION['isLogin'] = $arrConfig['isLoginKey'];
        $_SESSION['uid'] = $res[0]['id'];
        $_SESSION['uname'] = $res[0]['nome'];
        $_SESSION['uacesso'] = $res[0]['acesso'];
    
        $newDate = date('Y-m-d H:i:s');
        $query = "UPDATE administradores SET acesso = '$newDate' WHERE id = ". $_SESSION['uid'];
        $res = my_query($query);
    
        header('Location: '.$arrConfig['url_admin'].'/index.php');
        exit();
    }
}

header('Location: '.$arrConfig['url_admin'].'/login?erro=1');
exit();
?>