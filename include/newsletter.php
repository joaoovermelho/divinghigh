<?php
include 'config.inc.php';

    $email = $_POST['email'];
    $query  = "INSERT INTO newsletter (email, ativo) VALUES ('$email', 1)";
    $resID = my_query($query);



    echo "<script>document.location='$arrConfig[url_site]/homepage'</script>";