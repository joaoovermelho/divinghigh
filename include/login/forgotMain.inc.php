<div class="login_register_area text-center">
    <div class="container">
        <div class="row">
            <div class="ajuste-email">
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                <h3 class="title-4 pb-10">Esqueceste-te da palavra-passe?</h3>
                <div class="login_wrapper">
                    <form action="forgotpassword-email.php" method="post">
                        <div class="input_wrap">
                            <label>Email</label>
                            <input type="text" name="email">
                        </div>
                        <div class="input_wrap">
                            <button type="submit" value="submit">Submeter</button>
                        </div>
                        <!--<div class="input_wrap">
                            <a href="register.php">Ainda não tens uma conta?</a>
                        </div>-->
                    </form>
                    <div class="input_wrap">
                    <?php
                    if(isset($_GET['erro'])) {
                        echo "O email inserido não tem conta associada.";
                    }elseif(isset($_GET['aviso'])){
                        echo "Verifica a tua caixa de correio e spam, deverás receber um email para recuperação da palavra-passe!";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
