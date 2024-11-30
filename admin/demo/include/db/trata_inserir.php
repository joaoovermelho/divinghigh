<?php
$strNomeCampos = '';
$strValorCampos = '';
foreach($arrDados['campos'] as $k => $v) {
    if($v['inserir']) {
        $strNomeCampos .= $k . ', ';
        
        // quando é uma checkbox
        if($v['tipo'] == 'checkbox') {
            if(!isset($_POST[$k])) {
                $valorCheckbox = 0;
            } else {
                $valorCheckbox = 1;
            }
            $strValorCampos .= "'".$valorCheckbox."', ";
        
        // quando é uma password
        } elseif($v['tipo'] == 'password') {
            $valorPassword = password_hash($_POST[$k], PASSWORD_DEFAULT);
            $strValorCampos .= "'".$valorPassword."', ";
            
        // quando é uma data automática
        } elseif($v['tipo'] == 'data_auto') {
            $valorData = date('Y-m-d');
            $strValorCampos .= "'".$valorData."', ";

        // quando é uma imagem/fotografia
        } elseif($v['tipo'] == 'imagem') {
            //criar pasta de imagens (caso não exista)

            if(!is_dir($arrConfig['dir_fotos'].'/'.$v['pastaImagens'])) {
                mkdir($arrConfig['dir_fotos'].'/'.$v['pastaImagens'], 0777);
            }

            $filename = '';
            if(isset($_FILES[$k])) {
                if($_FILES[$k]['error'] == 0) {
                    if(in_array($_FILES[$k]['type'], $arrConfig['fotos_auth'])) {
                        if($_FILES[$k]['size'] < $arrConfig['fotos_maxUpload']) {
                            $pathUploadFile = pathinfo($_FILES[$k]['name']);
                            $filename = uniqid($v['pastaImagens'].'_').'.'.$pathUploadFile['extension'];
                            move_uploaded_file($_FILES[$k]['tmp_name'], $arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$filename);
                        }
                    }
                }
            }
            $strValorCampos .= "'".$filename."', ";

        // quando é uma imagem/fotografia
        } elseif($v['tipo'] == 'ficheiro') {
            $filename = '';
            if(isset($_FILES[$k])) {
                if($_FILES[$k]['error'] == 0) {
                    if(in_array($_FILES[$k]['type'], $arrConfig['files_auth'])) {
                        if($_FILES[$k]['size'] < $arrConfig['files_maxUpload']) {
                            $pathUploadFile = pathinfo($_FILES[$k]['name']);
                            $filename = uniqid($v['pastaImagens'].'_').'.'.$pathUploadFile['extension'];
                            move_uploaded_file($_FILES[$k]['tmp_name'], $arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$filename);
                        }
                    }
                }    
            }
            $strValorCampos .= "'".$filename."', ";

        // por defeito
        } elseif(isset($_POST[$k])) {
            $strValorCampos .= "'".$_POST[$k]."', ";
        
        }
    }
}
$strNomeCampos = substr($strNomeCampos, 0, strlen($strNomeCampos) - 2);
$strValorCampos = substr($strValorCampos, 0, strlen($strValorCampos) - 2);

// ----------------------------
// QUERY inserir
// IMPORTANTE: validar se está tudo correto e se podemos inserir
// ----------------------------
$query  = "INSERT INTO ".$arrDados['tabela']." ($strNomeCampos) VALUES ($strValorCampos)";
$resID = my_query($query);


// ----------------------------
// Redirect para listagem
// ----------------------------
echo "<script>document.location='$arrConfig[url_admin]/$arrDados[tabela]/index.php'</script>";
exit();
?>