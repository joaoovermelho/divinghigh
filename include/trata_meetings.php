<?php include 'config.inc.php';

$uid= $_SESSION['uid'];
$user = $_SESSION['uusername'];
$local = $_POST['local'];
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];
$private = $_POST['private'];
if(!$private){
    $private = 0;
}

$filename = '';
if(isset($_FILES['foto'])) {
    if($_FILES['foto']['error'] == 0) {
        if($_FILES['foto']['size'] < $arrConfig['fotos_maxUpload']) {
            $pathUploadFile = pathinfo($_FILES['foto']['name']);
            $filename = uniqid('mapa_').'.'.$pathUploadFile['extension'];
            move_uploaded_file( $_FILES['foto']['tmp_name'], $arrConfig['dir_fotos'].'/mapa/'.$filename);
        }
    }
}

if($filename == ''){
    $qImg = "SELECT imagem FROM mapa_interativo WHERE localidade = '$local'";
    $rImg= my_query($qImg);
    $filename= $rImg[0]['imagem'];
}

$query = "INSERT INTO meetings (user, imagem, titulo, descricao, local, data, num_participantes, ativo) VALUES ('$user', '$filename', '$titulo', '$descricao', '$local', '$data', '1', '1')";

if($local AND $titulo AND $data AND $local!='nulo'){
    $res= my_query($query);

    $qMeetings= "SELECT id FROM meetings WHERE titulo = '".$titulo."'";
    $rMeetings= my_query($qMeetings);
    $qInsert = "INSERT INTO usersmeetings (idUser, idMeeting) VALUES ($uid, ".$rMeetings[0]['id'].")";
    $rInsert= my_query($qInsert);

    header('Location: '.$arrConfig['url_site'].'/minhaconta.php?aviso=1&id=3');
}else{
    header('Location: '.$arrConfig['url_site'].'/minhaconta.php?erro=1');   
}

//$select ="SELECT id FROM meetings WHERE user =".$user." AND data =". $data;
//$rS=my_query($select);
//$idMeeting= $rS[0]['id'];

//$insert = "INSERT INTO usersmeetings (idUser , idMeeting) VALUES (".$uid.", ".$idMeeting.")";
//$qI = my_query($insert);

?>