<div class="blog__area mb-100 pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="bigpost-wrapper">

                    <?php
                    $regPagina = 2;
                    $pagina = (isset($_GET['p']) ? $_GET['p'] : 1);
                    $start = ($pagina-1)*$regPagina;

                    $query = 'SELECT * FROM noticia';
                    $res = my_query($query);

                    $numRegistos = count($res);
                    $nPaginas = ceil($numRegistos / $regPagina);

                    Noticias($regPagina, $start);
                    ?>

                    <?php 
                    // ----------------------------
                    ?>

                    <div class="pagination pt-50">
                            <ul>
                    
                    <?php
                    $pdisabled = ($pagina == 1 ? 'disabled' :'');
                    echo '<li><a href="'.$arrConfig['url_site'].'/noticias.php?p='.($pagina-1).'"  ><i class="far fa-angle-left"></i></a></li>';

                    /*for($i=1; $i<=$nPaginas; $i++) 
                    {
                        $active = ($pagina == $i ? 'active' : '');
                        echo '<li class="page-item '.$active.'"><a href="'.$arrDados['tabela'].'/homepage?p='.$i.'" class="page-link">'.$i.'</a></li>';
                    }*/
                    if($nPaginas <= 5)
                    {
                        for($i=1; $i<=$nPaginas; $i++) 
                        {
                            $active = ($pagina == $i ? 'active' : '');
                            echo '<li><a href="'.$arrConfig['url_site'].'/noticias.php?p='.$i.'" >'.$i.'</a></li>';
                        }
                    }
                    else
                    {
                        for($i=($pagina-2); $i<=($pagina+2); $i++) 
                        {
                            if($i>0)
                            {
                                $active = ($pagina == $i ? 'active' : '');
                                echo '<li><a href="'.$arrConfig['url_site'].'/noticias.php?p='.$i.'">'.$i.'</a></li>';
                            }
                        } 
                    }   
                    $ndisabled = ($pagina == $nPaginas ? 'disabled' :'');
                    echo '<li><a href="'.$arrConfig['url_site'].'/noticias.php?p='.($pagina+1).'"><i class="far fa-angle-right"></i></a></li>';
                    ?>
                 </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>