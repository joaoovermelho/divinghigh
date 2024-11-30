
<?php
// ----------------------------
// function: escreveCampoFormulario()
// ----------------------------
function escreveCampoFormulario($dadosCampo, $nomeCampo, $valorCampo = '') {
    $strReturn = '';
    switch($dadosCampo['tipo']) {
        case 'textbox': 
                        $strReturn .= '<input required  class="form-control" type="text" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
                        break;
        case 'textarea': 
                        $strReturn .= '<textarea class="form-control" name="'.$nomeCampo.'"></textarea>';
                        break;

        case 'password': 
                        $strReturn .= '<input required  class="form-control" type="password" name="'.$nomeCampo.'" value="">';
                        break;

        case 'checkbox': 
                        $checked = ( $valorCampo == 1 ? 'checked="checked"' : '' );
                        $strReturn .= '<input class="form-check-input required " type="checkbox" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
                        break;

        case 'imagem':
                        $strReturn .= '<input class="form-control" type="file" name="'.$nomeCampo.'" value="">';
                        break;
        
        case 'ficheiro':
                        $strReturn .= '<input class="form-control" type="file" name="'.$nomeCampo.'" value="">';
                        break;

        case 'select':
                        $arrSelect = array();
                        // opções pré-definidas
                        if(isset($dadosCampo['select_options'])) {
                            $arrSelect = $dadosCampo['select_options'];

                            $strReturn .= '<select class="form-select" name="'.$nomeCampo.'">';
                            foreach($arrSelect as $k => $v) {
                                $selected = ( isset($v['default']) ? 'selected="selected"' : '' );
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
                                $arrSelect[$k] = $v;
                            }

                            $strReturn .= '<select class="form-select" name="'.$nomeCampo.'">';
                            $strReturn .= '<option value="0">-------------</option>';
                            foreach($arrSelect as $k => $v) {
                                $strReturn .= '<option value="'.$v[$dadosCampo['select_table']['key']].'">'.$v[$dadosCampo['select_table']['label']].'</option>';
                            }
                            $strReturn .= '</select>';
                        }
                        break;

        case 'data':
                        $strReturn .= '<input required  class="form-control" type="date" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
                        break;

        case 'data_time':
            $strReturn .= '<input required  class="form-control" type="datetime-local" name="'.$nomeCampo.'" value="'.$valorCampo.'">';
            break;
    }
    return $strReturn;
}
?>

<div class="titulo">
    <h1>Inserir dados</h1>
</div>
<div class="clear"></div>

<form name="formInserir" action="<?php echo $arrDados['tabela'] ?>/index.php?n=tinserir" method="post" enctype="multipart/form-data">
    <table>
        <?php
        foreach($arrDados['campos'] as $k => $v) {
            if($v['inserir'] AND ($v['hidden'] == 0 OR !isset($v['hidden']))) {
                echo '<tr>';
                echo '<td>'.$v['legenda'].'</td>';
                echo '<td>'.escreveCampoFormulario($v, $k).'</td>';
                echo '</tr>';
            }
        }
        ?>
        <tr>
            <td></td>
            <td><button class="btn btn-primary w-100" type="submit">Inserir</button></td>
        </tr>
    </table>
</form>

