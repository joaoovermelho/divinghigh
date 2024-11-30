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

<!-- gallary area start --> 

<?php include 'include/mapa/mapaTitle.inc.php' ?>

<!-- gallary area end -->

<!-- contact info area end -->

<div class="map-2">
            <div class="google-map contact-map pt-10 pl-10 pr-10 pb-10">
            <iframe src="https://my.atlistmaps.com/map/981d0f1c-af2d-4cad-ab48-480ef2709a46?share=true" allow="geolocation" width="100%" height="500px" frameborder="0" scrolling="no" allowfullscreen></iframe>
                <!--<iframe class="w-100" height="400" src="https://maps.google.com/maps?q=col%C3%A9gio%20de%20gaia&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>-->
            </div>
         </div>

         <!-- expert area start  -->
    <div class="expert__area mb-130 mt-40">
        <div class="container">
            <div class="service__wrapper text-center mb-50">
                <h2>Como criar um meeting</h2>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 offset-xl-1">
                    <div class="expert__thumb">
                        <img src="<?php echo $arrConfig['url_site']?>/assets/img/mapa/left-img.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 pl-50">
                    <div class="expertsingle mb-60 ">
                        <div class="expertsingle__thumb">
                            <span><i class="fa-2x fa fa-user pt-30"></i></span>
                        </div>
                        <div class="expertsingle__content">
                            <h5>Inicia sessão </h5>
                            <p>Se ainda não criaste conta, regista-te <br> no nosso site para teres acesso aos meetings.</p>
                        </div>
                    </div>
                    <div class="expertsingle mb-60 ">
                        <div class="expertsingle__thumb expertsingle__content ">
                            <h5>Explora o nosso mapa</h5>
                            <p>Explora o nosso mapa único dos melhores locais para <br> praticar Cliff Diving, podes filtrar a tua pesquisa por nível<br> de facilidade, segurança, condições ou assistência médica.</p>
                        </div>
                        <div class="expertsingle__content expertsingle__thumb pt-10">
                            <span><i class="fa-2x fa fa-map"></i></span>
                        </div>
                    </div>
                    <div class="expertsingle mb-60">
                        <div class="expertsingle__content expertsingle__thumb pt-10">
                            <span><i class="fa-2x fa fa-users"></i></span>
                        </div>
                        <div class="expertsingle__thumb expertsingle__content">
                            <h5>Cria um meeting</h5>
                            <p>Agora que sabes onde queres mergulhar, organiza um meeting<br>na nossa página, seleciona a uma data e hora de início <br> e escolhe se queres um meeting privado ou público.</p>
                        </div>
                    </div>
                    <div class="expertsingle ">
                        <div class="expertsingle__thumb expertsingle__content">
                            <h5>Conhece amantes do desporto</h5>
                            <p>Depois do meeting estar criado, só precisas de esperar por  <br> novos utilizadores para se juntarem e a data chegará!<br> Diverte-te! </p>
                        </div>
                        <div class="expertsingle__content expertsingle__thumb pt-10">
                            <span><i class="fa-2x fa fa-water pt-30"></i></span>
                        </div>
                    </div>
                    <p class="title-4 pt-20 pl-150">BONS MERGULHOS!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- expert area end  -->

    <div class="contact__inner_2 text-center">
        <h2 class="mb-80 theme-color">Meetings Diving High</h2>
        
<!-- exhibitions area start -->
<?php if($_SESSION['uid']){
    include 'include/mapa/mapaMain.inc.php';
}else{
    echo '</div>';
    include 'include/mapa/mapaMain.noLogin.inc.php';
}
 ?>

<!-- exhibitions area end -->    

<!-- footer area start -->

<?php include 'include/_geral/footer.inc.php'?>

<!-- footer area end -->

<!-- JS here -->
<?php include 'include/_geral/jsscripts.inc.php' ?>

</body>
</html>