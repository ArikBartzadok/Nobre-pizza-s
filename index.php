<?php 
include_once('controller/connect.php');
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();
?>
	
	<!DOCTYPE html>
	<html lang="pt-br" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="etec206">
		<!-- Meta Description -->
		<meta name="description" content="pizzaria Casa Nova web page">
		<!-- Meta Keyword -->
		<meta name="keywords" content="Casa Nova, pizzaria, comida, promoção">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Casa Nova</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo-2.png" alt="" title="" style="height: 20px;" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
						  <li class="menu-active"><a href="#home">Home</a></li>
						  <li><a href="produtos.php">Produtos</a></li>
				          <li><a href="#about">Saiba +</a></li>
				          <li><a href="#different">Diferenciais</a></li>
						  <li><a href="#filiais">Filiais</a></li>
						  <li><a href="#produtcs">Destaques</a></li>
				          <li><a href="#review">Review</a></li>
				          <li><a href="#faq">FAQ</a></li>
				          <?php 
							          if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['pass']) == true)){
								          echo '<li class="menu-has-children"><a href="">Login</a><ul><li><a href="login.php">Login</a></li><li><a href="signup.php">Sign-up</a></li>';
                        }
                        else if($_SESSION['rank'] == 0) {
                          echo '<li class="menu-has-children"><a href="">Perfil</a><ul><li><a href="user.php">Perfil</a></li><li><a href="feedback.php">Feedback</a></li><li><a href="controller/logout.php">Sair</a></li>';
                        }
                        else if($_SESSION['rank'] == 1) {
                          echo '<li class="menu-has-children"><a href="">ADM</a><ul><li><a href="admin.php">Painel</a></li><li><a href="admin-perfil.php">Perfil</a></li><li><a href="feedback.php">Feedback</a></li><li><a href="controller/logout.php">Sair</a></li>';
                        }

                        ?>
							  
							  <!-- if com página de adm -->

				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-10">
							<br />							
							<h1>
								Pizzaria Casa Nova				
							</h1>
							<br />
							<br />
							<h5 class="text-white text-uppercase">A melhor da região!</h5>
							<br />
							<br />
							<a href="produtos.php" class="primary-btn text-uppercase e-large">Comprar agora</a>													
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start video-sec Area -->
			<section class="video-sec-area section-gap" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center ">
						<div class="col-lg-6 video-left">
							<h6>90 anos de tradição!</h6>
							<h1>As melhores pizza's <br>
							de toda a baixada santista!</h1>
							<p><span>Proporcionamos aos nossos clientes, a melhor experiência da comida italiana.</span></p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a class="primary-btn" href="#">Fazer minha reserva</a>
						</div>
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ZthNYozVwNM"><img class="img-fluid" src="img/play-icon.png" alt=""></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start top-course Area -->
			<section class="top-course-area section-gap" id="different">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">O melhor delivery da região</h1>
								<p>Sistema de atendimento otimizado</p>
							</div>
						</div>
					</div>					
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-3 course-left">
							<div class="single-course">
								<span class="lnr lnr-rocket"></span>
								<a href="#"><h4>Alta Performance</h4></a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.
								</p>
							</div>
							<div class="single-course">
								<span class="lnr lnr-cog"></span>
								<a href="#"><h4>Gerenciamento otimizado</h4></a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.
								</p>
							</div>							
						</div>
						<div class="col-lg-6 course-middle">
							<img class="img-fluid mx-auto d-block" src="img/products/pizza4.png" alt="">
						</div>
						<div class="col-lg-3 course-right">
							<div class="single-course">
								<span class="lnr lnr-apartment"></span>
								<a href="#"><h4>Filiais distribuídas</h4></a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.
								</p>
							</div>
							<div class="single-course">
								<span class="lnr lnr-phone"></span>
								<a href="#"><h4>Antendimento 24hrs</h4></a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisic ing elit, seddo eiusmod tempor incid.idunt ut labore et dolore magna aliqua.
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End top-course Area -->					

			<!-- Start unique-feature Area -->
			<section class="unique-feature-area section-gap" id="produtcs">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Nossos principais produtos</h1>                
                <h5 class="text-white text-uppercase">Aqueles que você precisa conhecer!</h5>
							</div>
						</div>
					</div>						
					<div class="row">
          <?php
					$sql = "SELECT * FROM produto";
            		$res = mysqli_query($con, $sql);
            
            		//Captura o número de linhas retornadas do banco
            		$num = mysqli_num_rows($res);
            
            		//Transforma o $resultado em um array
            		$array = mysqli_fetch_assoc($res); 

            		//Exibe os dados
					do {
				?>
						<div class="col-lg-3 col-md-6">
							<div class="single-unique-product">
								<img class="img-fluid" src="img/products/<?= $array['imagem']; ?>" alt="">
								<div class="desc">
									<h4>
                  <?= $array['nome'];?>
									</h4>
                  <h6>R$ <?= $array['preco'];?></h6>
                  <p><?= $array['descricao'];?></p>
									<a class="text-uppercase primary-btn" href="#">Comprar</a>
								</div>
							</div>
            </div>
            <?php } while($array = mysqli_fetch_assoc($res))?>																								
					</div>
				</div>	
			</section>
			<!-- End unique-feature Area -->
		
			<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Avaliações de clientes</h1>
								<p>Os mais recentes feed-backs.</p>
							</div>
						</div>
					</div>						
					<div class="row">
					<?php
					$sql = "SELECT * FROM comentario";
            		$res = mysqli_query($con, $sql);
            
            		//Captura o número de linhas retornadas do banco
            		$num = mysqli_num_rows($res);
            
            		//Transforma o $resultado em um array
            		$array = mysqli_fetch_assoc($res); 

            		//Exibe os dados
					do {
				?>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4><?= $array['nome_cliente'];?></h4>
								<p>
								<?= $array['texto'];?>
								</p>
								<div class="star">
								<?php 
								
								if($array['nota'] == 1){
									echo '<span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
								}

								if($array['nota'] == 2){
									echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
								}

								if($array['nota'] == 3){
									echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
								}

								if($array['nota'] == 4){
									echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span>';
								}

								if($array['nota'] == 5){
									echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>';
								}

								?>
									
								</div>
							</div>
						</div>

				<?php } while($array = mysqli_fetch_assoc($res))?>													

					</div>
				</div>	
			</section>
			<!-- End review Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area" id="filiais">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">Filiais distribuídas por todo o Brasil</h1>
							<p>Visite uma de nossas unidades!</p>
						</div>
					</div>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14760.55913991041!2d-46.93070720529248!3d-22.348350151851907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a3c1f8c167a3ac1!2sEscola%20T%C3%A9cnica%20Estadual%20Euro%20Albino%20de%20Souza!5e0!3m2!1spt-BR!2sbr!4v1601858113306!5m2!1spt-BR!2sbr" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				<br />																	
				<br />																	
			</div>
			</section>
			<!-- End home-about Area -->

			<!-- Start faq Area -->
			<section class="faq-area section-gap" id="faq">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Perguntas frequentes</h1>
								<p>Tudo o que vocẽ precisa saber.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-start">
						<div class="col-lg-6 faq-left">
							<div id="accordion">
							  <div class="card">
							    <div class="card-header" id="headingOne">
							      <h5 class="mb-0">
							        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										lorem ipsum dolor sit...?
							        </button>
							      </h5>
							    </div>

							    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							      <div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="headingTwo">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										lorem ipsum dolor sit...?
							        </button>
							      </h5>
							    </div>
							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							      <div class="card-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
							      </div>
							    </div>
							  </div>							  						  
							</div>							
						</div>	
					</div>
				</div>	
			</section>
			<!-- End faq Area -->
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Sobre nós</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">									
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Feito com <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="#" target="_blank">Etec 206</a>
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Novidades</h6>
								<p>Fique por dentro de nossas promoções</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Digite seu E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="novidades" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Siga-nos</h6>
								<p>Em nossas redes sociais</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



