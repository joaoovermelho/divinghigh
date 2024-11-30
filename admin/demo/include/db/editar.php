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
// QUERY editar
// ----------------------------
$query  = "SELECT * FROM ". $arrDados['tabela']." WHERE $strKey";
$res    = my_query($query);

// ----------------------------
// function: escreveCampoFormulario()
// ----------------------------
function escreveCampoFormulario($arrConfig, $dadosCampo, $nomeCampo, $valorCampo = '') {
    $strReturn = '';
    switch($dadosCampo['tipo']) {
        case 'textbox': 
                        $strReturn .= '<input required  class="form-control" type="text" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
                        break;
        
        case 'textarea': 
                        $strReturn .= '<textarea class="form-control" name="'.$nomeCampo.'">'.$valorCampo.'</textarea>';
                        break;

        
        case 'password': 
                        $strReturn .= '<input required  class="form-control" type="password" name="'.$nomeCampo.'" value="">';
                        break;

        case 'checkbox': 
                        $checked = ( $valorCampo == 1 ? 'checked="checked"' : '' );
                        $strReturn .= '<input class="form-check-input required " type="checkbox" name="'.$nomeCampo.'" value="'.$valorCampo.'" '.$checked.' >';
                        break;

        case 'imagem':
                        if(is_file($arrConfig['dir_fotos'].'/'.$dadosCampo['pastaImagens'].'/'.$valorCampo)) {
                            $strReturn .= '<img height="200" src="'.$arrConfig['url_fotos'].'/'.$dadosCampo['pastaImagens'].'/'.$valorCampo.'"><br>';
                        }
                        else {
                            $strReturn .= 'Não tem imagem inserida!<br>';
                        }
                        $strReturn .= '<input  class="form-control" type="file" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
                        break;

        case 'ficheiro':
                        if(is_file($arrConfig['dir_fotos'].'/'.$dadosCampo['pastaImagens'].'/'.$valorCampo)) {
                            $strReturn .= '<a target="_blank" href="'.$arrConfig['url_fotos'].'/'.$dadosCampo['pastaImagens'].'/'.$valorCampo.'">Download Ficheiro</a><br>';
                        }
                        else {
                            $strReturn .= 'Não tem ficheiro inserido!<br>';
                        }
                        $strReturn .=  '<input  class="form-control" type="file" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
                        break;

        case 'data':
                        $strReturn .= '<input required  class="form-control" type="date" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
                        break;

        case 'data_time':
            $strReturn .= '<input required  class="form-control" type="datetime-local" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
            break;

        case 'select':
                        $arrSelect = array();
                        // opções pré-definidas
                        if(isset($dadosCampo['select_options'])) {
                            $arrSelect = $dadosCampo['select_options'];

                            $strReturn .= '<select class="form-select" name="'.$nomeCampo.'">';
                            foreach($arrSelect as $k => $v) {
                                $selected = ( $v['key'] == $valorCampo ? 'selected="selected"' : '' );
                                $strReturn .= '<option '.$selected.' value="'.$v['key'].'">'.$v['label'].'</option>';
                            }
                            $strReturn .= '</select>';

                        // valores de uma tabela de base de dados
                        } elseif(isset($dadosCampo['select_table'])) {
                            $strSelectKey = ( isset($dadosCampo['select_table']['filter']) ? $dadosCampo['select_table']['filter'] : '1=1' );
                            $query  = "SELECT * FROM ". $dadosCampo['select_table']['table']." WHERE $strSelectKey";
                            $resSelect = my_query($query);

                            $arrSelect = array();
                            foreach($resSelect as $k => $v) {
                                $arrSelect[$v[$dadosCampo['select_table']['key']]] = $v;
                            }
                        
                            $strReturn .= '<select class="form-select" name="'.$nomeCampo.'">';
                            $strReturn .= '<option value="0">-------------</option>';
                            foreach($arrSelect as $k => $v) {
                                // mostra apenas as opções diferentes do próprio registo
                                // não posso escolher como pai ele próprio
                                
                                $flagPai = 1;
                                if(isset($dadosCampo['multinivel_key'])) {
                                    if($dadosCampo['multinivel_key'] == 1) {
                                        $flagPai = 0;
                                        if($k != $_GET[$dadosCampo['select_table']['key']]) {
                                            $flagPai = 1;
                                        }    
                                    }
                                }
                                if($flagPai == 1) {
                                    $selected = ( $v[$dadosCampo['select_table']['key']] == $valorCampo ? 'selected="selected"' : '' );
                                    $strReturn .= '<option '.$selected.' value="'.$v[$dadosCampo['select_table']['key']].'">'.$v[$dadosCampo['select_table']['label']].'</option>';
                                }                                
                            }
                            $strReturn .= '</select>';
                        }
                        break;
    }
    return $strReturn;
}
?>

<div class="titulo">
    <h1>Editar</h1>
</div>
<div class="clear"></div>

<form name="formEditar" action="<?php echo $arrDados['tabela'] ?>/index.php?n=teditar" method="post" enctype="multipart/form-data">
    <input required  type="hidden" name="AAAAAAkey" value="<?php echo $strKey; ?>">
    <table>
        <?php
        foreach($arrDados['campos'] as $k => $v) {
            if($v['editar']) {
                echo '<tr>';
                echo '<td>'.$v['legenda'].'</td>';
                echo '<td>'.escreveCampoFormulario($arrConfig, $v, $k, $res[0][$k]).'</td>';
                echo '</tr>';
            }
        }
        ?>
        <tr>
            <td></td>
            <td><button class="btn btn-primary w-100" type="submit">Guardar</button></td>
        </tr>
    </table>
</form>