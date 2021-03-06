<?php 
include_once('controller/connect.php');
//include_once('controller/session.php');
include_once('controller/config.php');
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
    <meta name="description" content="pizzaria nobre web page">
    <!-- Meta Keyword -->
    <meta name="keywords" content="nobre, pizzaria, comida, promoção">
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
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>

          <header id="header" id="home">
          <?php
            include_once "components/nav-bar.php";
          ?>
          </header><!-- #header -->
        
        <div style="height: 100px"></div>
        
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
        
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
          <?php
            include_once "components/footer.php";
          ?>            
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



