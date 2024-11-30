<?php
// ----------------------------
// condição WHERE, filtro para fazer alterações
// identificar os campos GET enviados
// ----------------------------
$strKey = '';
foreach($_GET as $k => $v) {
    if($k != 'n') {
        $strKey .= "$k = '$v' AND ";
    }
}
$strKey = substr($strKey, 0, strlen($strKey) - 5);

// ----------------------------
// QUERY eliminar
// IMPORTANTE: validar se está tudo correto e se podemos eliminar
// ----------------------------
$query  = "DELETE FROM ". $arrDados['tabela']." WHERE $strKey";
$res    = my_query($query);

// ----------------------------
// Redirect para listagem
// ----------------------------
echo "<script>document.location='$arrConfig[url_admin]/$arrDados[tabela]/index.php'</script>";
exit();
?>