<?php
include '../config.inc.php';

$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

// Debugging: Print the posted username and password
echo "Username: $usr, Password: $pwd<br>";

// Query to fetch user details
$query = "SELECT * FROM utilizadores WHERE username = '$usr'";
$res = my_query($query);

// Debugging: Print the query result
echo "Query Result: ";
print_r($res);
echo "<br>";

if(count($res) > 0) {
    if(password_verify($pwd, $res[0]['password'])) {
        $_SESSION['isLogin'] = $arrConfig['isLoginKey'];
        $_SESSION['uid'] = $res[0]['id'];
        $_SESSION['uname'] = $res[0]['nome'];
        $_SESSION['uapelido'] = $res[0]['apelido'];
        $_SESSION['uemail'] = $res[0]['email'];
        $_SESSION['uphone'] = $res[0]['telemovel'];
        $_SESSION['uusername'] = $res[0]['username'];
        $_SESSION['ufotografia'] = $res[0]['fotografia'];
        $_SESSION['uestado'] = $res[0]['estado'];

        // Debugging: Print the session data
        echo "Session Data: ";
        print_r($_SESSION);
        echo "<br>";

        header('Location: '.$arrConfig['url_site'].'/homepage');
        exit();
    } else {
        echo "Password verification failed.<br>";
    }
} else {
    echo "No user found with the given username.<br>";
}

header('Location: '.$arrConfig['url_site'].'/login?erro=1');
exit();
?>