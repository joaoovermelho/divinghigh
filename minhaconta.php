	<?php 
	include 'include/config.inc.php';
	include $arrConfig['dir_site'].'/include/login/auth.inc.php';
 	?>

	<!doctype html>
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A minha conta</title>
        <base href="http://localhost/divinghigh/">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest"> 
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/futura-std-font.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="assets/css/ui.css">
		<link rel="stylesheet" href="assets/css/styleacc.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
		<link rel="stylesheet" href="assets/css/mystyle.css">
    </head>
	
    <!-- header area start -->

    <?php include 'include/_geral/menu.inc.php';
	$query = "SELECT * FROM utilizadores WHERE id=". $_SESSION['uid'];
	$user = my_query($query);
	?>    

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

<body>
	<section class="py-5">
		<div class="container">
			<h1 class="mb-5">A minha conta</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="upload/utilizadores/<?php echo $user[0]['fotografia']?>" alt="Image" class="shadow">
						</div>
						<h4 class="text-center"><?php echo $_SESSION['uname'] .' '; echo $_SESSION['uapelido'] ?></h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-user text-center mr-1"></i> 
							Conta
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
						<i class="fa fa-plus text-center mr-1"></i>
							Criar Meetings
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
						<i class="fas fa-users-crown text-center mr-1"></i>
							Os meus Meetings
						</a>
						<a class="nav-link" id="meetings-tab" data-toggle="pill" href="#meetings" role="tab" aria-controls="meetings" aria-selected="false">
						<i style="font-size:14px" class="fa text-center mr-1">&#xf0c0;</i>
							Ver Meetings
						</a>						
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade <?php if(!$_GET['id']){echo 'show active';} ?>" id="account" role="tabpanel" aria-labelledby="account-tab">
					<form name="formConta" action="include/trata_conta.php" method="post">
						<h3 class="mb-4">Definições da conta</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Primeiro nome</label>
								  	<input required type="text" class="form-control" name="nome" value="<?php echo $_SESSION['uname'] ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Apelido</label>
								  	<input required type="text" class="form-control" name="apelido" value="<?php echo $_SESSION['uapelido'] ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Telemovel</label>
								  	<input required type="text" class="form-control" name="phone" value="<?php echo $_SESSION['uphone'] ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Username</label>
								  	<input required type="text" class="form-control" name="usr" value="<?php echo $_SESSION['uusername'] ?>">
								</div>
							</div>
							<div class="col-md-6 fz30 pt-10">
								<div class="form-group">
								  	<label class="fz30">Fotografia</label>
									  <input name="imagem" type="file" src="submit.gif" alt="Submit" style="float:right" width="48" height="48">
								</div>
							</div>
							<!--<div class="col-md-6">
								<div class="form-group">
								  	<label>Company</label>
								  	<input type="text" class="form-control" value="Kiran Workspace">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Designation</label>
								  	<input type="text" class="form-control" value="UI Developer">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Bio</label>
									<textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
								</div>
							</div>-->
						</div>
						<div>
							<input class="btn btn-primary"type="submit" name="submit" value="Atualizar">
							<button class="btn btn-light"><a href="<?php echo $arrConfig['url_site'] ?>/minhaconta.php">Cancelar</a></button>
						</div>
					</form>
					<?php 
						if($_GET['erro']){
							echo 'Por favor, preenche todos os campos!';

						} 
						?>
					</div>
					<div class="tab-pane fade <?php if($_GET['id'] == 2 ){echo 'show active';} ?>" id="password" role="tabpanel" aria-labelledby="password-tab">
						<form class="pb-30" action="include/trataPassword.php" method="POST">
						<h3 class="mb-4">Definições da password</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Password antiga</label>
								  	<input required type="password" name="oldpwd" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nova password</label>
								  	<input required type="password" name="newpwd1" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirmar nova password</label>
								  	<input required type="password" name="newpwd2" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Atualizar</button>
							<button class="btn btn-light">Cancelar</button>
						</div>
						</form>
						<?php 
						if($_GET['erro']){
							echo 'Ocorreu um erro na atualização da tua palavra-passe, certifica-te que inseriste todos os dados corretamnete!';
						}elseif($_GET['info']){
							echo 'A tua palavra passe foi alterada com sucesso!';
						}
						?>
					</div>
					<div class="tab-pane fade <?php if($_GET['id']==3){echo 'show active';} ?>" id="security" role="tabpanel" aria-labelledby="security-tab">
					<form name="formMeeting" action="include/trata_meetings.php" enctype='multipart/form-data' method="post">
						<h3 class="mb-4">Cria um meeting</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>User</label>
								  	<input type="text" disabled class="form-control" name="user" value="<?php echo $_SESSION['uusername']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Titulo <span class="span">*</span></label>
								  	<input required type="text" class="form-control" name="titulo">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Data <span class="span">*</span></label>
									<input required type="datetime-local" class="form-control" name="data">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group fz30 pt-10">
								  	<label class="pr-30 fz30">Local <span class="span">*</span></label>
									<select name="local">
										<?php
											$query="SELECT * FROM mapa_interativo WHERE ativo = 1";
											$res= my_query($query);
											echo'<option value="nulo">Seleciona um local</option>';
											foreach($res as $k => $local){
												if($_GET['idMeeting']==$local['id']){
													echo '<option selected value="'.$local['localidade'].'">'.$local['localidade'].'</option>';	
												}else{
												echo '<option value="'.$local['localidade'].'">'.$local['localidade'].'</option>';
												}	
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6 fz30 pt-10">
								<div class="form-group">
								  	<label class="fz30">Imagem</label>
									  <input name="foto" type="file" src="submit.gif" alt="Submit" style="float:right" width="48" height="48">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Descrição <span class="span">*</span></label>
									<textarea required name="descricao" class="form-control" rows="4"></textarea>
								</div>
							</div>
							<!--<div class="col-md-6">
								<div class="form-group">
								  	<label>Company</label>
								  	<input type="text" class="form-control" value="Kiran Workspace">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Designation</label>
								  	<input type="text" class="form-control" value="UI Developer">
								</div>
							</div>-->
						</div>
						<div>
							<div class="form-group pl-20">
							<!--<input class="form-check-input" type="checkbox" value="1" id="private" name="private" >
								<label class="form-check-label" for="private">
									Deseja criar um meeting privado?
								</label>
							label>Deseja criar um meeting privado?</label>
								<select class="ml-10"name="private">									
									<option value="1">Sim</option>
									<option selected="selected" value="0">Não</option>
								</select>-->
							</div>
							<input class="btn btn-primary mb-40"type="submit" name="submit" value="Criar Meeting">
							<button class="btn btn-light mb-40"><a href="<?php echo $arrConfig['url_site'] ?>/minhaconta.php">Cancelar</a></button>
						</div>

						<?php
								 if($_GET['aviso']){
									 echo 'O seu meeting foi criado com sucesso!';
								 }elseif($_GET['erro']){
									 echo 'Houve algum erro na criação do seu meeting!';
								 }
							 
							?>
					</form>
					</div>
					<div class="tab-pane fade <?php if($_GET['id']==5){echo 'show active';} ?>" id="meetings" role="tabpanel" aria-labelledby="meetings-tab">
					<h3 class="mb-4">Meetings</h3>
						<div class="col-lg-12 pb-5">
						<?php 
							$query = "SELECT * FROM usersmeetings WHERE idUser = ". $_SESSION['uid'];
							$res = my_query($query);
							if(!$res){
								echo '<div class="col-md-6">
										<div class="form-group">
												<p>Não estás registado em nenhum meeting.</p>
												<p><a href="meetings.php">Visita o nosso mapa e participa nos meetings!</a></p>
										</div>
									   </div>';
							}
							foreach ($res as $k => $v){
								$qMeeting = "SELECT * FROM meetings WHERE id=". $v['idMeeting'];
								$rMeeting = my_query($qMeeting);								
								echo '<div class="cart-item d-md-flex justify-content-between"><a href="include/trataDelMeeting2.php?id='.$rMeeting[0]['id'].'&action=rem&a=u" class="remove-item"><i class="fa fa-times"></i></a>
										<div class="px-3 my-3">
											<div class="cart-item-product-thumb"><img width="15px" src="upload/mapa/'.$rMeeting[0]['imagem'].'" alt="Product"></div>
												<div class="cart-item-product-info">
												<h4 class="cart-item-product-title">'.$rMeeting[0]['titulo'].'</h4>
												<span class="fzplus pb-10">Criador do meeting: '.$rMeeting[0]['user'].'</span>
												<span class="fzplus">Número de participantes: '.$rMeeting[0]['num_participantes'].'</span>
												<span class="fzplus">Data e hora: '.$rMeeting[0]['data'].'</span>
											</div>
										</div>
									</div>';
							}
						?>
						</div>
					</div>
					<div class="tab-pane fade <?php if($_GET['id']==4){echo 'show active';} ?>" id="notification" role="tabpanel" aria-labelledby="notification-tab">
					<h3 class="mb-4">Os meus Meetings</h3>
						<div class="col-lg-12 pb-5">
						<?php 
							$qMeeting = "SELECT * FROM meetings WHERE user= '". $_SESSION['uusername']."' ORDER BY data";	
							$rMeeting = my_query($qMeeting);
							if(!$rMeeting){
								echo '<div class="col-md-6">
										<div class="form-group">
												<p>Ainda não criou nenhum meeting!</p>
												<p><a href="meetings.php">Acede à secção acima para criar novos meetings.</a></p>
										</div>
									   </div>';
							}
							foreach ($rMeeting as $k => $v){
								echo '<div class="cart-item d-md-flex justify-content-between"><a href="include/trataDelMeeting3.php?id='.$v['id'].'&action=rem&a=u" class="remove-item"><i class="fa fa-times"></i></a>
										<div class="px-3 my-3">
											<div class="cart-item-product-thumb"><img src="upload/mapa/'.$v['imagem'].'" alt="Product"></div>
												<div class="cart-item-product-info">
												<h4 class="cart-item-product-title">'.$v['titulo'].'</h4>
												<span class="fzplus pb-10">Criador do meeting: '.$v['user'].'</span>
												<span class="fzplus">Número de participantes: '.$v['num_participantes'].'</span>
												<span class="fzplus">Data e hora: '.$v['data'].'</span>
											</div>
										</div>
									</div>';
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- footer area start -->

	<?php include 'include/_geral/footer.inc.php'?>

	<!-- footer area end -->

	<!-- JS here -->
	<?php include 'include/_geral/jsscripts.inc.php' ?>
</body>
</html>