<?php
include '../config.inc.php';

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];
$phone = $_POST['phone'];


$filename = '';
if(isset($_FILES['foto'])) {
    if($_FILES['foto']['error'] == 0) {
        if($_FILES['foto']['size'] < $arrConfig['fotos_maxUpload']) {
            $pathUploadFile = pathinfo($_FILES['foto']['name']);
            $filename = uniqid('utilizadores_').'.'.$pathUploadFile['extension'];
            move_uploaded_file( $_FILES['foto']['tmp_name'], $arrConfig['dir_fotos'].'/utilizadores/'.$filename);
        }
    }
}

if($filename == ''){
    $filename = 'avatar_default.png';
}


$newpwd = password_hash($pwd, PASSWORD_DEFAULT);

//$query = "SELECT * FROM administradores WHERE username = '$usr' AND password = '$pwd'";
$queryInsert = " INSERT INTO utilizadores (nome, apelido, email, fotografia, username, password, telemovel,  estado) VALUES ('$nome', '$apelido', '$email', '$filename', '$usr', '$newpwd', '$phone', 1);";

if($nome AND $email AND $usr AND $pwd AND $phone){
    $res = my_query($queryInsert);
    header('Location: '.$arrConfig['url_site'].'/register.php?info=1');
}else{
    header('Location: '.$arrConfig['url_site'].'/register.php?erro=1');
}
exit();
?>