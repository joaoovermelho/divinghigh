<?php include 'config.inc.php';

$email = $_POST['email'];
$titulo = $_POST['titulo'];
$mensagem = $_POST['mensagem'];

$query = "INSERT INTO duvidas (email, titulo, texto) VALUES ('$email', '$titulo', '$mensagem')";
$res= my_query($query);



if($email){
    header('Location: '.$arrConfig['url_site'].'/contact.php?aviso=1');    
}else{
    header('Location: '.$arrConfig['url_site'].'/contact.php?erro=1');   
}
?>