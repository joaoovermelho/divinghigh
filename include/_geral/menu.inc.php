    <!--mini header area starts -->

<header class="header-area">
    <div class="gota_top bg-soft d-none d-sm-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                    <div class="gota_lang">
                        <ul>
                            <li>
                            <?php 
                               if($_SESSION['isLogin']){
                                echo '<a href="minhaconta.php">Bem vindo ';
                                echo $_SESSION['uname'].' ';
                                echo $_SESSION['uapelido'];
                                echo '</a>';
                            } 
                            ?>
                            </li>
                            <!--<li><a href="#">usd<i class="fal fa-chevron-down"></i></a>
                                <ul class="additional_dropdown">
                                    <li><a href="#">euro</a></li>
                                </ul>
                            </li>
                            <li><a href="#">english<i class="fal fa-chevron-down"></i></a>
                                <ul class="additional_dropdown">
                                    <li><a href="#">frences</a></li>
                                    <li><a href="#">japanes</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-5 col-lg-6 col-md-6 col-sm-6 text-end">
                    <div class="gota_right">
                        <ul>
                            <?php 
                            if(!$_SESSION['isLogin']){
                                echo '<li><a href="register.php">Registo</a></li>';
                                echo '<li><a href="login">Login</a></li>';
                            }else{
                                echo '<li><a href="minhaconta.php">Minha Conta</a></li>';
                                echo '<li><a href="logout">Logout</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!--mini header area ends
    header area starts-->

    <div class="gota_bottom position-relative">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 d-none d-sm-block">
                        <!-- <div class="gota_search">
                            <form class="search_form">
                                <button class="search_action"><i
                                        class="fal fa-search d-sm-none d-md-block"></i></button>
                                <input type="text" placeholder="search" />
                            </form>
                        </div> -->
                    </div> 
                    <div class="col-xl-8 col-lg-8 col-md-4 col-sm-4">
                        <div class="sidemenu sidemenu-1 d-lg-none d-md-block">
                            <a class="open" href="#"><i class="fal fa-bars"></i></a>
                        </div>
                        <div class="main-menu">
                            <nav id="mobile-menu align-center">
                                <ul>
                                    <?php MenuConfig() ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="gota_cart gotat_cart_1 text-end">
                            <a href="javascript:void(0)"><i class="fal fa-shopping-cart"></i>My Bag<span class="counter"> (2)</span></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </header>