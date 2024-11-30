    <?php include 'include/_geral/head.inc.php'?>

    <!-- header area start -->

    <?php include 'include/_geral/menu.inc.php'?>    

    <!-- header area end -->

    <!-- search bar area start -->

    <?php include 'include/_geral/searchbar.inc.php'?>  

    <!-- search bar area end -->

    <!-- side menu area start -->

    <?php include 'include/_geral/side-menu.inc.php'?>

    <!-- side menu area end -->

    <!-- cart area start  -->

    <?php include 'include/_geral/cartarea.inc.php'?>

    <!-- cart area end  -->

    <!-- start blog details area -->
        <section class="blog-aread pt-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <?php SingleHighlight() ?>
                    </div>
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
                    <a href="meetings.php">
                    <img src="<?php echo $arrConfig['url_site']?>/assets/img/eventos/mapa.png" alt="">
                    <div class="singleBlog__content">
                        <p>Escolhe um spot e diverte-te!</p>
                        <span>Cria meetings e conhece novos amantes do Cliff Diving.</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
        </section>
        <!-- start blog details end -->     
        </main>
    <!-- footer area start -->

<?php include 'include/_geral/footer.inc.php'?>

<!-- footer area end -->

<!-- JS here -->
<?php include 'include/_geral/jsscripts.inc.php' ?>
    </body>
</html>