<?php 
include_once('controller/connect.php');
include_once('controller/session.php');
include_once('controller/config.php');

if($_SESSION['rank'] > 1) {
	header('location:' . BASE . 'index.php');
}
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
          
        <!-- start perfil Area -->
        <section class="perfil">
        
        <div style="height: 200px"></div>
          
          <?php
					  $sql = "SELECT * FROM user WHERE id = " . $_SESSION['id'] . ";";
            $res = mysqli_query($con, $sql);
            
            //Captura o número de linhas retornadas do banco
            $num = mysqli_num_rows($res);
            
            //Transforma o $resultado em um array
            $array = mysqli_fetch_assoc($res); 
          ?>
                      
          <div class="text-center">            
            <?php									        
              echo '<img src="img/users/' . $array['imagem'] . '" class="w-25 p-3 rounded-circle" alt="Profile image">';
            ?>  

            <br />          

            <h1 class="text-white"><?= $array['nome']; ?></h1>
                       
          </div>          

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>Avalie nossa pizzaria</p>        
        <form method="POST" enctype="multipart/form-data" action="controller/feedback.php">

  <div class="form-row">    
    <div class="form-group col-md-2">
      <label for="inputState">Estrelas</label>
      <select name="stars" id="inputState" class="form-control">
        <option selected value ="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
      </select>
    </div>
    <div class="form-group col-md-10">
      <label for="inputZip">Comentário</label>
      <input name="comment" type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirmar feedback.
      </label>
    </div>
  </div>
  <button type="submit" class="genric-btn primary circle arrow">Enviar</button>
</form>
      </div>
    </div>
  </div>
</section>
          
        </section>
        <!-- End perfil Area -->
        
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



