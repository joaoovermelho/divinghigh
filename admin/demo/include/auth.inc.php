<?php
// tudo Ok se $erroAuth = 0
$erroAuth = 0;

if(!isset($_SESSION['isLogin'])) {
    // erro, a variável de sessão não existe
    $erroAuth = 1;
} elseif($_SESSION['isLogin'] != $arrConfig['isLoginKey']) {
    // erro, a variável de sessão tem um valor diferente do esperado!
    $erroAuth = 2;
}

// avaliação do ERRO?
if($erroAuth) {
    header('Location: '.$arrConfig['url_admin'].'/login');
    exit();
}