<div class="blog__area mb-100 pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="sidebar__wrapper">
                        <!--<div class="mainBlog text-center mb-50">
                            <div class="blog__widget">
                                <div class="mainBlog__thumb"><a href="shop.php">
                                    <img src="./assets/img/eventos/shop.png" alt="">
                                    </a></div>
                            </div>
                        </div>
                        <div class="search__widget mb-35">
                            <h4 class="mb-40 blog-s-title">Search (DEV)</h4>
                            <div class="custom-form">
                                <form action="#" method="POST">
                                    <input type="text" placeholder="search ...">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div>-->
                        <div class="common-widget mb-50">
                            <h4 class="mb-40 blog-s-title">As nossas notícias</h4>
                            <?php LastNews() ?>
                            <h4 class="mb-40 blog-s-title">Visita o nosso mapa</h4>
                            <div class="singleBlog mb-30"> 
                                <a href="noticias.php">
                                <img src="<?php echo $arrConfig['url_site']?>/assets/img/eventos/mapa.png" alt="">
                                <div class="singleBlog__content">
                                    <p>Escolhe um spot e diverte-te!</p>
                                    <span>Cria meetings e conhece novos amantes do Cliff Diving.</span>
                                </div>
                                </a>
                            </div>
                            <h4 class="mb-40 blog-s-title">Vê os melhores momentos dos eventos da 'Red Bull'</h4>
                            <?php LastHighlights() ?>
                        </div>
                        <div class="common-widget newsletter mb-50">
                            <h4 class="mb-20 blog-s-title">Newsletter</h4>
                            <p>Fica a par de todas as notícias e eventos<br> que iremos fazer futuramente!</p>
                            <div class="newsletter">
                                <form action="include/newsletter.php" method="post">
                                    <input type="email" name="email" placeholder="Insira aqui o seu email..." />
                                    <input type="submit" value="Subscribe">
                                </form>
                            </form>
                            </div>
                            
                        </div>
                        <div class="common-widget instagram">
                            <h4 class="mb-20 blog-s-title">Galeria de Imagens</h4>
                                <div class="instagram-images pt-20 text-center">
                                <?php 
                                $query = "SELECT * FROM imagensindex WHERE ATIVO = 1 ORDER BY RAND() LIMIT 6";
                                $res= my_query($query);
                                $numReg=count($res);

                                for ($i=0; $i<$numReg; $i++){
                                    echo'
                                            <a class="popup-image" href="upload/imagensIndex/'. $res[$i]['imagem'] .'"><img src="upload/imagensIndex/'. $res[$i]['imagem'] .'" alt=""></a>';
                                }
                                ?>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="bigpost-wrapper">
                        <?php Eventos() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>