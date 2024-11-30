<?php
// ----------------------------
// Campos chave do filtro editar
// IMPORTANTE: validar se está tudo correto e se podemos editar
// ----------------------------
$strKey = $_POST['AAAAAAkey'];

$strNomeCampos = '';
foreach($arrDados['campos'] as $k => $v) {
    if($v['editar']) {
        
        // quando é uma checkbox
        if($v['tipo'] == 'checkbox') {
            if(!isset($_POST[$k])) {
                $valorCheckbox = 0;
            } else {
                $valorCheckbox = 1;
            }
            $strNomeCampos .= "$k = '".$valorCheckbox."', ";

        // quando é uma password
        } elseif($v['tipo'] == 'password') {

            if($_POST[$k] != '') {
                $valorPassword = password_hash($_POST[$k], PASSWORD_DEFAULT);
                $strNomeCampos .= "$k = '".$valorPassword."', ";
            }
            
        // quando é uma imagem/fotografia
        } elseif($v['tipo'] == 'imagem') {
            
            if(isset($_FILES[$k])) {
                if($_FILES[$k]['error'] == 0) {
                    if(in_array($_FILES[$k]['type'], $arrConfig['fotos_auth'])) {
                        if($_FILES[$k]['size'] < $arrConfig['fotos_maxUpload']) {
                            // apagar a foto/imagem antiga
                            $query  = "SELECT $k FROM ".$arrDados['tabela']." WHERE $strKey";
                            $resImagem = my_query($query);
                            if(is_file($arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$resImagem[0][$k])) {
                                unlink($arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$resImagem[0][$k]);
                            }

                            // copiar a foto nova
                            $pathUploadFile = pathinfo($_FILES[$k]['name']);
                            $filename = uniqid($v['pastaImagens'].'_').'.'.$pathUploadFile['extension'];
                            move_uploaded_file($_FILES[$k]['tmp_name'], $arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$filename);
                            $strNomeCampos .= "$k = '".$filename."', ";
                        }
                    }
                } 
            }
        
        // quando é um ficheiro
        } elseif($v['tipo'] == 'ficheiro') {
                
            if(isset($_FILES[$k])) {
                if($_FILES[$k]['error'] == 0) {
                    if(in_array($_FILES[$k]['type'], $arrConfig['files_auth'])) {
                        if($_FILES[$k]['size'] < $arrConfig['files_maxUpload']) {
                            // apagar um ficheiro antigo
                            $query  = "SELECT $k FROM ".$arrDados['tabela']." WHERE $strKey";
                            $resImagem = my_query($query);
                            if(is_file($arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$resImagem[0][$k])) {
                                unlink($arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$resImagem[0][$k]);
                            }

                            // copiar a foto nova
                            $pathUploadFile = pathinfo($_FILES[$k]['name']);
                            $filename = uniqid($v['pastaImagens'].'_').'.'.$pathUploadFile['extension'];
                            move_uploaded_file($_FILES[$k]['tmp_name'], $arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$filename);
                            $strNomeCampos .= "$k = '".$filename."', ";
                        }
                    }
                }
            }

        // por defeito
        } elseif(isset($_POST[$k])) {
            $strNomeCampos .= "$k = '".$_POST[$k]."', ";
        
        }
    }
}
$strNomeCampos = substr($strNomeCampos, 0, strlen($strNomeCampos) - 2);

// ----------------------------
// QUERY editar
// IMPORTANTE: validar se está tudo correto e se podemos editar
// ----------------------------
$query  = "UPDATE ".$arrDados['tabela']." SET $strNomeCampos WHERE $strKey";
$res    = my_query($query);

// ----------------------------
// Redirect para listagem
// ----------------------------
echo "<script>document.location='$arrConfig[url_admin]/$arrDados[tabela]/index.php'</script>";
exit();
?>