<div class="shop-page pt-85">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12">

<!-- SIDE-MENU -->
    
                    <div class="sidebar">
                        <div class="product-widget">
                            <h3 class="widget-title mb-30">Sexo <span class="sub-title ajustes2"> <a href="shop.php"> (Limpar filtros)</a></span></h3>
                            <ul class="product-categories">
                                <?php
                                $query = "SELECT * FROM catalogo WHERE ativo = 1 ORDER BY nome";
                                $res = my_query($query); 
                                foreach($res as $k=>$v) {
                                    echo '<li><a href="shop.php?Catalogo='.$v['label'].'">'.$v['nome'].'</a></li>'; 
                                }
                                ?>
                                <br>
                            </ul>
                        </div>

                        <div class="product-widget">
                            <h3 class="widget-title mb-30">Categorias <span class="sub-title ajustes2"> <a href="shop.php"> (Limpar filtros)</a></span></h3>
                            <ul class="product-categories">
                            <?php
                                $query = "SELECT * FROM tipo WHERE ativo = 1 ORDER BY nome";
                                $res = my_query($query); 
                                foreach($res as $k=>$v) {
                                    echo '<li><a href="shop.php?Tipo='.$v['label'].'">'.$v['nome'].'</a></li>'; 
                                }  
                                ?>
                            </ul>
                        </div>

                        <!--<div class="product-widget pt-50">
                            <h3 class="widget-title mb-30">Filtrar por Preço</h3>
                            <form action="#">
                                <div class="price-filter">
                                    <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 46.4%;"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 7.2%;"></span>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 48.8%;"></span>
                                        <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 45%;"></div>
                                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 7.2%; width: 41.6%;"></div>
                                </div>
                                <div class="filter-form-submit mt-35">
                                        <button type="submit">Filtrar</button>
                                        <div class="filter-price d-inline-block pl-20">Preço: <input type="button" id="amount" value="$170 - $300"></div>
                                    </div>
                                </div>
                            </form>                        
                        </div>

                        <!--<div class="product-widget pt-50">
                            <h3 class="widget-title mb-30">Tamanhos</h3>
                            <div class="layer-size">
                                <span>XS</span>
                                <span>S</span>
                                <span>M</span>
                                <span>L</span>
                                <span>XL</span>
                                <span>XXL</span>
                            </div>
                        </div>

                        <div class="product-widget pt-50">
                            <h3 class="widget-title mb-30">Color Options</h3>
                            <div class="colors-layer">
                                <a href="shop.html"><span class="blue"></span></a>
                                <a href="shop.html"><span class="gray"></span></a>
                                <a href="shop.html"><span class="skyblue"></span></a>
                                <a href="shop.html"><span class="red"></span></a>
                                <a href="shop.html"><span class="yellow"></span></a>
                            </div>
                        </div>
                        
                        <div class="product_list_widget">
                            <h3 class="widget-title mb-30 pt-50">Top rated</h3>
                            <div class="item-widget">
                                <div class="img-left">
                                    <a href="single.html"><img src="./assets/img/product/10.jpg" alt="product-meta"></a>
                                </div>
                                <div class="product-meta">
                                    <a href="single.html"><h4 class="sm-title">Arsenal Home Jersey</h4></a>
                                    <span>$55.00</span>
                                </div>
                            </div>

                            <div class="item-widget">
                                <div class="img-left">
                                    <a href="single.html"><img src="./assets/img/product/11.jpg" alt="product-meta"></a>
                                </div>
                                <div class="product-meta">
                                    <a href="single.html"><h4 class="sm-title">Lorem Ipsum simply</h4></a>
                                    <span>$55.00</span>
                                </div>
                            </div>

                            <div class="item-widget">
                                <div class="img-left">
                                    <a href="single.html"><img src="./assets/img/product/12.jpg" alt="product-meta"></a>
                                </div>
                                <div class="product-meta">
                                    <a href="single.html"><h4 class="sm-title">dummy text of the</h4></a>
                                    <span>$55.00</span>
                                </div>
                            </div>

                            <div class="item-widget">
                                <div class="img-left">
                                    <a href="single.html"><img src="./assets/img/product/13.jpg" alt="product-meta"></a>
                                </div>
                                <div class="product-meta">
                                    <a href="single.html"><h4 class="sm-title">printing and typesetting</h4></a>
                                    <span>$55.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="product-widget pt-50">
                            <h3 class="widget-title mb-30">Product tags</h3>
                            <div class="tags mb-50">
                                <a href="shop.html">Basketball</a>
                                <a href="shop.html">Handbag</a>
                                <a href="shop.html">Jackets</a>
                                <a href="shop.html">Kids & Young</a>
                                <a href="shop.html">Training Wear</a>
                                <a href="shop.html">Women’s</a>
                            </div>
                        </div> -->
                    </div>
                </div>

<!-- SIDE-MENU ENDS -->

                <div class="col-xl-9 col-lg-8 col-md-9 col-sm-12">
                    <div class="shop-top-bar position-relative ">
                        <div class="showing-result ajuste">
                            <?php $Catalogo = ( isset($_GET['Catalogo']) ? $_GET['Catalogo'] : null );
                                            $Tipo = ( isset($_GET['Tipo']) ? $_GET['Tipo'] : null );
                                            ProdutosCount($Catalogo,$Tipo); ?>
                        </div>
                        
                        <!-- <div class="shop-tab">
                            <nav>
                                <div class="nav nav-tabs shop-tabs" id="nav-tab" role="tablist">
                                    <button>
                                        <span>Visualização</span>
                                    </button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                        <img src="./assets/img/essential/i4.svg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                    <img src="./assets/img/essential/list.svg" alt="">
                                </button>
                                </div>
                            </nav>                                 
                        </div>
                        <!--
                        <div class="shop-filtaring">
                            <div class="filter-select">
                                <select class="order-by">
                                    <option value="Default setting">Default setting</option>
                                    <option value="Default setting">short by popularity</option>
                                    <option value="Default setting">short by average rating</option>
                                    <option value="Default setting">short by latest</option>
                                    <option value="Default setting">short by price : low to high</option>
                                    <option value="Default setting">Default setting</option>
                                </select>
                                    <button class="open-filter"><i class="fal fa-plus"></i>filter</button>
                                    <div class="filter-content">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <div class="product-widget pt-50">
                                                    <h3 class="widget-title mb-30">color</h3>
                                                    <div class="colors-layer">
                                                        <a href="shop.html"><span class="blue"></span></a>
                                                        <a href="shop.html"><span class="gray"></span></a>
                                                        <a href="shop.html"><span class="skyblue"></span></a>
                                                        <a href="shop.html"><span class="red"></span></a>
                                                        <a href="shop.html"><span class="yellow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3">
                                                <div class="product-widget pt-50">
                                                    <h3 class="widget-title mb-30">Size</h3>
                                                    <div class="layer-size">
                                                        <span>3XL</span>
                                                        <span>L</span>
                                                        <span>M</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3">
                                                <div class="product-widget pt-50">
                                                    <h3 class="widget-title mb-30">Filter By Price</h3>
                                                    <form action="#">
                                                        <div class="price-filter">
                                                            <div id="slider-range-2" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 46.4%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 7.2%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 48.8%;"></span>
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 45%;"></div>
                                                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 7.2%; width: 41.6%;"></div></div>
                                                            <div class="filter-form-submit mt-35">
                                                                <button type="submit">Filter</button>
                                                                <div class="filter-price d-inline-block pl-20">Price: <input type="button" id="amount-2" value="$36 - $244"></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3">
                                                <div class="product-widget pt-50">
                                                    <h3 class="widget-title mb-30">Product tags</h3>
                                                    <div class="tags mb-50">
                                                        <a href="shop.html">Basketball</a>
                                                        <a href="shop.html">Handbag</a>
                                                        <a href="shop.html">Jackets</a>
                                                        <a href="shop.html">Kids & Young</a>
                                                        <a href="shop.html">Training Wear</a>
                                                        <a href="shop.html">Women’s</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div> -->
                    </div>

<!-- PRODUCT START -->

                    <div class="shop-page-product pt-50 pb-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="row">

                                            <?php
                                            $Catalogo = ( isset($_GET['Catalogo']) ? $_GET['Catalogo'] : null );
                                            $Tipo = ( isset($_GET['Tipo']) ? $_GET['Tipo'] : null );
                                            ProdutosView1($Catalogo,$Tipo);
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

<!-- LIST START -->
                                    <!--<div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-contact-tab">                                               
                                            
                                            <?php
                                            //ProdutosListView();
                                            ?>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    