<?php 
include 'config.inc.php';

$idUser = $_SESSION['uid'];
$idMeeting = $_GET['id'];

$q = "SELECT num_participantes FROM meetings WHERE id = ".$idMeeting;
$resNum = my_query($q);
$newNumP = $resNum[0]['num_participantes'] - 1;

$insertNumP = "UPDATE meetings SET num_participantes = ".$newNumP." WHERE id = ".$idMeeting;
$resNewNum = my_query($insertNumP);


$delete = "DELETE FROM usersmeetings WHERE idUser =".$idUser." AND idMeeting=".$idMeeting;
$qI = my_query($delete);

header('Location: '.$arrConfig['url_site'].'/minhaconta.php?id=5');
?>