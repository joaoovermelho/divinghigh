<?php   
$query = "TRUNCATE seo";
$res = my_query($query);
$query = "SELECT * FROM menu WHERE ativo = 1";
$res = my_query($query);

foreach($res as $k=> $value){
   
    $query = "INSERT INTO seo ( urlsimp, url, modulo,moduloid) VALUES ('".generateSeoURL($value['titulo'])."','$value[caminho]','menu','')";
   
    $res = my_query($query);

}
$query = "SELECT * FROM voos";
$res2 = my_query($query);

foreach($res2 as $value){

    $query = "INSERT INTO seo ( urlsimp, url, modulo,moduloid) VALUES ('".generateSeoURL($value['titulo'])."','voosdetalhe.php?id=$value[id]','produto','$value[id]')";
   
    $res = my_query($query);

}

?>