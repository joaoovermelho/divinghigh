<!-- blog area start -->
        <div class="fetures_area_3 pt-30 pb-30 theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pt-10">
                        <div class=" fetures_3" data-background="assets/img/index/atletas.png">
                            <div class="fetures_3_body">
                                <a href="highlights.php"><h2 class="mb-60">Vê os melhores momentos dos teus atletas preferidos</h2></a>
                                <p>Não vais querer perder!</p>
                            </div>
                            <div class="fetures_3_footer"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-sm-none d-md-block">
                        <div class="fetures_3" data-background="assets/img/index/red-bull-cliff-diving.png">
                            <div class="fetures_3_header pt-30 text-center ">
                                <p>Fica a par deste desporto incrível</p>
                            </div>
                            <div class="fetures_3_body text-center">
                                <a href="cliffdiving.php"><h2 class="fetures_s_2 fesection-2 mb-80"><span>O que é o </span>CLIFF DIVING?</h2></a>
                                <a class="button_style_f" href="cliffdiving.php">Clica aqui!</a>
                            </div>
                            <div class="fetures_3_footer mb-80"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pt-10">
                        <div class="fetures_3" data-background="assets/img/index/redbull.png">
                            <div class="fetures_3_body">
                                <a href="eventos.php"><h2 class="mb-100">Acompanha os eventos da <br></h2></a>
                                <p>Não vais querer perder!</p>
                            </div>
                            <div class="fetures_3_footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area mb-100">
            <div class="container">
                <div class="section-wrapper text-center mb-35 pb-20">
                    <h2 class="section-title"><a href="blog.html">As nossas páginas</a></h2>
                    <p>Acede aqui ao nosso mapa oficial e vê algumas das noticias mais recentes de Cliff Diving</p>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="blog" style="background-image: url('./assets/img/index/shopbackground.png');">
                            <div class="blog__content">
                                <h3 class="blog-title "><a href="mapa_interativo">Mapa Interativo</a></h3>
                                <p>Inicia sessão, explora o nosso mapa e participa em meetings para conhecer novas pessoas!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <?php
                        
                        //Noticias

                        $query = "SELECT * FROM noticia WHERE ATIVO = 1 ORDER BY data DESC"; 
                        $res = my_query($query);
                        $numRegistos = count($res);

                        for($i=0;$i<3;$i++){
                            echo '<div class="bpost">
                            <div class="bpost__thumb">
                                <img class="noticia" src="upload/noticias/'. $res[$i]['imagem'] .'" alt="blog_post">
                            </div>
                            <div class="bpost__content">
                                <h3 class="blog-title title-2"><a href="noticias.php">'. $res[$i]['titulo'] .'</a></h3>
                                <p>'. $res[$i]['data'] .'</p>
                                <p class="subtitulo"> Aceda para mais informações </p>
                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->
        <!--
<div class="features-area d-none d-md-block fix">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="fetures">
                    <div class="fetures__thumb fix">
                        <a href="noticias.php"><img src="./assets/img/page/index-news.png" alt="features1"></a>
                    </div>
                    <div class="fetures__content">
                        <h4 class="feature-title mb-40">Notícias</h4>
                        <p class="d-md-none d-lg-block">Fica a par de tudo o que se passa do mundo do <span class="discount"> Cliff Diving</span>!</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="fetures">
                    <div class="fetures__thumb fix">
                        <a href="404.html"><img src="./assets/img/page/index-events.png" alt="features1"></a>
                    </div>
                    <div class="fetures__content">
                        <h4 class="feature-title mb-40">Eventos</h4>
                        <p class="d-md-none d-lg-block">Conhece os eventos da <span class="discount">Redbull </span> e as classificações dos teus 'divers' favoritos</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="fetures">
                    <div class="fetures__thumb fix">
                        <a href="shop.php"><img src="./assets/img/page/index-shop.png" alt="features1"></a>
                    </div>
                    <div class="fetures__content">
                        <h4 class="feature-title mb-40">Loja Online</h4>
                        <p class="d-md-none d-lg-block">Visita a nossa loja de produtos originais <span class="discount">"Diving High"!</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- features area end  -->


    <!-- product show case area start  -->
    <div class="show-case lightblue pt-125">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="section-wrapper text-center mb-35">
                        <h4 class="sub-title bigone">Atletas</h4>
                        <h2 class="section-title text-white">Conhece os mais conhecidos 'divers' masculinos e femininos.</h2>
                    </div>
                </div>
                <div class="case-info text-center">
                    <h2 class="back1-text d-none d-lg-block">Cliff</h2>
                    <h2 class="back-text d-none d-lg-block">Diving</h2>
                    <a href="atletas.php"><img class="banar-product" src="./assets/img/index/athletes.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- new product area start --
    <div class="new_product_area mb-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="section-wrapper text-center mb-35">
                                <h2 class="section-title"><a href="#">Explore Our New arrivals</a></h2>
                                <p>Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis<br> eget
                                    maecenas sed urna malesuada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-active2 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".3s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/6.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/6-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <!-- <div class="product__update">
                                                    <a class="#">new</a>
                                                </div> --
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Ladies Rose one Flower </a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>180.00 -
                                                        <span>$</span>280.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".4s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/9.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/9-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <div class="product__update">
                                                <a href="#">new</a>
                                            </div>
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Mens Sneakers Mens Casual </a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>280.00 -
                                                        <span>$</span>380.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".5s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/3.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/3-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <div class="product__update">
                                                <a class="lightblueclr" href="#">-30%</a>
                                            </div>
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Ballet Flat Shoes for Women</a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>180.00 -
                                                        <span>$</span>280.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".6s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/1.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/1-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <!-- <div class="product__update">
                                                    <a class="#">new</a>
                                                </div> --
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Formal Leather Loafers for </a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                        <span>$</span>680.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".7s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/4.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/4-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <div class="product__update">
                                                <a class="#">new</a>
                                            </div>
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">sports round toe men </a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                        <span>$</span>680.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padding-left">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"></div>
                    <div class="section-wrapper text-center mb-35">
                        <h2 class="section-title">Explore Our featured</h2>
                        <p>Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis<br> eget maecenas
                            sed urna malesuada.</p>
                    </div>
                    <div class="row">
                        <div class="product-active2 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".4s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/1.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/1-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <!-- <div class="product__update">
                                                    <a class="#">new</a>
                                                </div> --
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">global 4L premium </a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                        <span>$</span>680.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".5s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/5.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/5-1.jpg"
                                                    alt="product_image">
                                            </a>
                                            <div class="product__update">
                                                <a href="#">new</a>
                                            </div>
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Fashion Leather Slip</a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                        <span>$</span>680.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".6s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/24.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/24-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <div class="product__update">
                                                <a class="lightblueclr" href="#">-30%</a>
                                            </div>
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Lotto Sports Slippers for Men and </a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                        <span>$</span>680.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".7s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/1.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/1-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <!-- <div class="product__update">
                                                    <a class="#">new</a>
                                                </div> --
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Canvas Shoes in Lotto Brand Print</a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                        <span>$</span>680.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item swiper-slide  wow fadeInLeft " data-wow-duration=".9s" data-wow-delay=".8s">
                                    <div class="product product-2">
                                        <div class="product__thumb">
                                            <a href="single.html">
                                                <img class="product-primary" src="./assets/img/product/4.jpg"
                                                    alt="product_image">
                                                <img class="product-secondary" src="./assets/img/product/4-2.jpg"
                                                    alt="product_image">
                                            </a>
                                            <div class="product__update">
                                                <a class="#">new</a>
                                            </div>
                                            <div class="product-info mb-10">
                                                <div class="product_category">
                                                    <span>Shoes, Clothing</span>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star start-color"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="product__name">
                                                <h4><a href="shop.html">Slippers for Men and Women</a></h4>
                                                <div class="pro-price">
                                                    <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                        <span>$</span>680.00</p>
                                                    <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product__action">
                                                <div class="inner__action">
                                                    <div class="wishlist">
                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                    </div>
                                                    <div class="view">
                                                        <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                    </div>
                                                    <div class="layer">
                                                        <a href="#"><i class="fal fa-layer-group"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- new product area end --

        

    <!-- gallary area start  -->

    <div class="gallary_area">
        <?php 
        $query = "SELECT * FROM imagensindex WHERE ATIVO = 1 ORDER BY RAND() LIMIT 6";
        $res= my_query($query);
        $numReg=count($res);

        for ($i=0; $i<$numReg; $i++){
            echo'<div class="gallary__thumb">
                    <a href="atletas.php"><img src="upload/imagensIndex/'. $res[$i]['imagem'] .'" alt="gallaryImage"></a>
                </div>';
        }
        ?>
        
    </div>
    <!-- gallary area end  -->