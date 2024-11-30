<?php
include 'include/config.inc.php';

$url = $_SERVER['REQUEST_URI'];
$arrDados = explode("/", $url);
$new_url= $arrDados[sizeof($arrDados)-1];


$query = "SELECT * FROM seo WHERE urlfriendly = '$new_url'";
$resURL = my_query($query);

if(isset($resURL[0])){
    if($resURL[0]['modulo_id'] != 0){
        switch($resURL[0]['modulo']){
            case 'produtos':
                $_GET['id'] = $resURL[0]['modulo_id'];
                include $arrConfig['dir_site'] . '/single.php';
        }
    } else {
        include $arrConfig['dir_site'] . $resURL[0]['url'];
    }

    exit();
    #pr($res);
    #var_dump(is_file($res[0]['url']));
    #include ($resURL[0]['url']);
}

include '404.php';    
exit();
?>

