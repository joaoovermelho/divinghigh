<?php 
include 'config.inc.php';

$idUser = $_SESSION['uid'];
$idMeeting = $_POST['id'];

$q = "SELECT num_participantes FROM meetings WHERE id = ".$idMeeting;
$resNum = my_query($q);
$newNumP = $resNum[0]['num_participantes'] - 1;

$insertNumP = "UPDATE meetings SET num_participantes = ".$newNumP." WHERE id = ".$idMeeting;
$resNewNum = my_query($insertNumP);

$delete = "DELETE FROM usersmeetings WHERE idUser =".$idUser." AND idMeeting=".$idMeeting;
$qI = my_query($delete);

if($newNumP == 0){
    $deleteMeeting = "DELETE FROM meetings WHERE num_participantes= 0";
    $qDI = my_query($deleteMeeting);
}

header('Location: '.$arrConfig['url_site'].'/meetings.php#meeting');
?>