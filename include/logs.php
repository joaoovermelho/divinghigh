<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
  //ip from share internet
  $ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  //ip pass from proxy
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
  $ip = $_SERVER['REMOTE_ADDR'];
}

$sessao = session_id();
$dataHora = date('Y-m-d H:i:s');
$pagina = basename($_SERVER['PHP_SELF']);
$query = "INSERT INTO logs (session, ip, url, data, ativo) VALUES ('$sessao', '$ip', '$pagina', '$dataHora', '1')";
$resultado = my_query($query);
?>