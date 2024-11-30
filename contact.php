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


    <!-- contact area start -->
    <div class="contact__area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="contact__content text-center mb-140">
                    <h2>Contacte-nos</h2>
                </div>
                </div>
            </div>
            <div class="contact-wrapper">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                    <div class="contactbox">
                        <div class="contactbox__heading">
                            <h5>Contacte-nos</h5>
                            <h2>Encontrou algum 'bug' ou quer nos ajudar a expandir o mapa Diving High? Fale connosco!</h2>
                        </div>
                        <div class="contactbox__info pt-20">
                            <h5>Newsletter</h5>
                            <ul>
                                <li>Se quiser ficar a par das novidades do website "Diving High", </li>
                                <li>submita as suas informações na nossa Newsletter </li>
                            </ul>
                        </div>
                        <div class="contactbox__info pt-20">
                            <h5>Ligue-nos</h5>
                            <ul>
                                <li>Se precisar de ajuda em tempo real não exite em ligar para o nosso número</li>
                                <li><a href="tel:+351 223 252 141">+351 223 252 141</a></li>
                            </ul>
                        </div>
                        <div class="contactbox__info pt-20">
                            <h5>Email</h5>
                            <ul>
                                <li>Pode sempre enviar a sua dúvida para o nosso email</li>
                               <li><a href="mailto:geral@divinghigh.pt">geral@divinghigh.pt </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-md-6">
                    <div class="form">
                        <form name="formContacts" action="include/trata_contacts.php" method="post">
                            <div class="c-input-group">
                                <label>Email <span>*</span></label>
                                <input required type="text" <?php if($_SESSION['uemail']){echo 'value='.$_SESSION['uemail'];} ?> name ="email">
                            </div>
                            <div class="c-input-group">
                                <label>Titulo<span>*</span></label>
                                <input required type="text" name="titulo">
                            </div>
                            <div class="c-input-group">
                                <label>Mensagem</label>
                                <textarea type="text" name="mensagem" ></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
     <!-- contact area end -->

         <div class="map__area">
         <div class="mapouter"><div class="gmap_canvas"><iframe width="1480" height="805" id="gmap_canvas" src="https://maps.google.com/maps?q=col%C3%A9gio%20de%20gaia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:805px;width:1480px;}</style><a href="https://www.embedgooglemap.net">google map on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:805px;width:1480px;}</style></div></div>
         </div>

    <!-- footer area start -->

    <?php include 'include/_geral/footer.inc.php'?>

    <!-- footer area end -->

	<!-- JS here -->
    <?php include 'include/_geral/jsscripts.inc.php' ?>
    
    </body>
</html>