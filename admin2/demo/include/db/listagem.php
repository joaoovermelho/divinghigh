<?php
// ----------------------------
// condição WHERE, filtro para casos multinível
// IMPORTANTE: podemos ter de garantir que só existe um campo multinível
// ----------------------------
$arrPaiKey = array();
$strWherePai = 'WHERE 1=1 ';
$listagemMultinivel = 0;
$contaCamposMultinivel = 0;

if(isset($arrDados['multinivel'])) {
    if($arrDados['multinivel'] == 1) {
        foreach($arrDados['campos'] as $k => $v) {
            if(isset($v['multinivel_key'])) {
                $arrPaiKey[] = $k;
                $listagemMultinivel = 1;
                $contaCamposMultinivel++;

                if($contaCamposMultinivel > 1){
                    die("Erro: múltiplos campos multinivel_key");
                    exit();
                }

                if(!isset($_GET[$k])) {
                    if($v['multinivel_key'] == 1) {        
                        $strWherePai .= "AND $k = '0' ";
                    }
                } else {
                    $strWherePai .= "AND $k = '$_GET[$k]' ";
                }
            }
        }
    }
}

// ----------------------------
// identificar os campos chave da tabela
// IMPORTANTE: podemos ter de verificar o código para situações com múltiplos campos chave
// ----------------------------
$arrKey = array();
$contaCamposKey = 0;

foreach($arrDados['campos'] as $k => $v) {
    if(isset($v['key'])) {
        if($v['key']) {
            $contaCamposKey++;
            if($contaCamposKey > 1){
                die("Erro: múltiplos campos key");
                exit();
            }

            $arrKey[] = $k;
        }
    }
}

// ----------------------------
// QUERY listagem
// ----------------------------
$query = 'SELECT * FROM ' . $arrDados['tabela'] . ' ' . $strWherePai . ' ORDER BY '. $arrDados['tabela_ordem_listagem'];
$res = my_query($query);
$numRegistos = count($res);

// ----------------------------
// permite apagar todos os registos?
// IMPORTANTE: vai controlar o número de registos atuais
// ----------------------------
$flagApagarRegistos = true;
if(isset($arrDados['numMinRegistos'])) {
    if($numRegistos <= $arrDados['numMinRegistos']) {
        $flagApagarRegistos = false;
    }
}
?>

<?php if(!isset($arrDados['insert'])) {?>
    <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                  <a href="<?php echo $arrDados['tabela'] ?>/index.php?n=inserir" class="btn btn-primary d-none d-sm-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    Inserir
                  </a>
                </div>
              </div>
<?php } ?>

<?php
if($numRegistos > 0) {
    ?>
    <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
    <table class="table table-vcenter card-table">
        <?php
        // cabeçalho da tabela
        ?>
        <thead>
            <tr>
                <?php
                foreach($arrDados['campos'] as $k => $v) {
                    if($v['listagem']) {
                        echo '<th class="th">'.$v['legenda'].'</th>';
                    }
                }
                ?>

                <!-- colunas gerais -->
                <?php if(!isset($arrDados['edit'])) {?>
                <th class="th"></th>
                <?php } ?> 
                <th class="th"></th>

                <?php
                if(isset($arrDados['multinivel'])) {
                    if($arrDados['multinivel'] == 1) {
                        echo '<td class="th">Filhos</th>';
                    }
                }
                ?>
            </tr>
        </thead>
        <?php
        // linhas da tabela
        ?>
        <?php
        for($i=0; $i<$numRegistos; $i++) {
            
            // ----------------------------
            // $strKey
            // construir os campos chave do URL
            // ----------------------------
            $strKey = '';
            foreach($arrKey as $k => $v) {
                $strKey .= '&'.$v.'='.$res[$i][$v];
            }
            ?>    
            <tr>
                <tbody>
                <?php
                // ----------------------------
                // apresenta campos genéricos da listagem
                // ----------------------------
                foreach($arrDados['campos'] as $k => $v) {
                    if($v['listagem']) {

                        // quando é uma imagem/fotografia
                        if($v['tipo'] == 'imagem') {
                            if(is_file($arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$res[$i][$k])) {
                                echo '<td><img class="avatar" height="50" src="'.$arrConfig['url_fotos'].'/'.$v['pastaImagens'].'/'.$res[$i][$k].'"></td>';
                            } else {
                                echo '<td>Sem imagem</td>';
                            }

                        // quando é um ficheiro
                        } elseif($v['tipo'] == 'ficheiro') {
                            if(is_file($arrConfig['dir_fotos'].'/'.$v['pastaImagens'].'/'.$res[$i][$k])) {
                                echo '<td><a target="_blank" href="'.$arrConfig['url_fotos'].'/'.$v['pastaImagens'].'/'.$res[$i][$k].'">Download Ficheiro</a></td>';
                            } else {
                                echo '<td>Sem ficheiro</td>';
                            }

                        // por defeito
                        } else {
                            echo '<td>'.$res[$i][$k].'</td>';
                        }

                    }
                }
                ?>

                <!-- colunas gerais -->
                <?php if(!isset($arrDados['edit'])) {?>
                <td align="center">
                    <a href="<?php echo $arrDados['tabela'] ?>/index.php?n=editar<?php echo $strKey; ?>"> Editar </a>
                </td>
                <?php } ?>
                <td align="center">
                    <?php
                    if($flagApagarRegistos) {
                        ?>
                        <a href="<?php echo $arrDados['tabela'] ?>/index.php?n=eliminar<?php echo $strKey; ?>"> Eliminar </a>
                        <?php
                    }
                    ?>
                </td>



                <?php
                if(isset($arrDados['multinivel'])) {
                    if($arrDados['multinivel'] == 1) {
                    ?>

                    <td align="center">
                        <?php
                        if($listagemMultinivel) {
                            $query = "SELECT * FROM  " . $arrDados['tabela'] . " WHERE " . $arrPaiKey[0] . " = '" . $res[$i][$arrKey[0]] . "'";
                            $resFilhos = my_query($query);
                            if(count($resFilhos) > 0) {
                                ?>
                                <a href="index.php?n=listagem&<?php echo $arrPaiKey[0]; ?>=<?php echo $res[$i][$arrKey[0]]; ?>"> + </a>
                                <?php
                            }
                        }
                        ?>
                    </td>

                    <?php
                    }
                }
                ?>

            </tbody>
            </tr>
        <?php
        }
        ?>

    </table>
    <?php
} else {
    echo '   <div class="col-12">
    <div class="card">';
    echo "Não existem registos para a tabela.";
    echo '</div></div> ';
}
?>