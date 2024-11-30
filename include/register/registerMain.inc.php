<div class="login_register_area">
    <div class="container">
        <div class="row gx-5">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                <h3 class="title-7">Registo</h3>
                <div class="login_wrapper">
                    <form action="include/register/validar.php" enctype='multipart/form-data' method="post">
                    <div class="row mb-30">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input_wrap">
                                    <label>Primeiro Nome <span>*</span></label>
                                    <input type="text" name="nome">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="input_wrap">
                                    <label>Apelido <span>*</span></label>
                                    <input type="text" name="apelido">
                                </div>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label>Email <span>*</span></label>
                            <input type="text" name="email">
                        </div>
                        <div class="input_wrap">
                            <label>Fotografia</label>
                        <input type="file" name="foto" value="">
                        </div>
                        <div class="input_wrap">
                            <label>Username <span>*</span></label>
                            <input type="text" name="usr">
                        </div>
                        <div class="input_wrap">
                            <label>Nª de telemóvel <span>*</span></label>
                            <input type="text" name="phone">
                        </div>
                        <div class="input_wrap">
                            <label>Password<span>*</span></label>
                            <input type="password" name= "pwd" id="password">
                            <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                            <script>
                                function toogle(){
                                    var x = getElementById("password");
                                    if(x.type == password){
                                        x.type == text;
                                    }else{
                                        x.type == password;
                                    }
                                };
                            </script>
                        </div>
                        <div class="input_wrap">
                        <button type="submit">Regista-te</button>
                        </div>
                        <div class="input_wrap">
                            <a href="login.php">Já criaste uma conta?</a>
                        </div>
                    </form>
                    <div class="input_wrap">
                        <?php
                        if($_GET['info'] == 1 ) {
                            echo "As credênciais que inseriste estão corretas, conta criada com sucesso.";
                        }else{
                            if($_GET['erro'] == 1 ){
                                echo"Houve um erro na criação da tua conta, certifica te que inseriste os teus dados corretamente.";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                <h3 class= "title-7 none">Já tens conta criada?</h3>
                <p class ="fz20">Acede aqui para inciares sessão e aproveita o conteúdo exclusivo Diving High.</p>
                <p class ="fz20"> Organiza meeting nos melhores locais para realizar este desporto em Portugal</p>
                <div class= "login_logo blog-thumb pt-10">
                    <a href="login.php"><img class = "mt-30" src="assets/img/logo/divinghigh-logowbg.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
    

    