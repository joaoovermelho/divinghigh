<?php 
include 'config.inc.php';

$user = $_SESSION['uusername'];
$idUser = $_SESSION['uid'];
$idMeeting = $_GET['id'];

    $deleteMeeting = "DELETE FROM meetings WHERE id =".$idMeeting;
    $qDI = my_query($deleteMeeting);

    $deleteUM = "DELETE FROM usersmeetings WHERE idMeeting =".$idMeeting;
    $qD = my_query($deleteUM);

header('Location: '.$arrConfig['url_site'].'/minhaconta.php?id=4');
?>