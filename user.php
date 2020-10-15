<?php 
include_once('controller/connect.php');
include_once('controller/session.php');

if($_SESSION['rank'] != 0) {
	header('location:http://localhost/pizzaria_nobre/index.php');
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

        <!-- Start banner Area -->
        <section class="banner-area" id="home">	
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-10">
                        <br />							
                        <h1>
                            Perfil de usuário				
                        </h1>
                        <br />                        
                        <h5 class="text-white text-uppercase">Bem vindo!</h5>
                        <br />                        
							          <a href="#" class="primary-btn text-uppercase e-large">Acessar produtos</a>
                    </div>											
                </div>
            </div>
        </section>		
        <!-- End banner Area -->        

        <!-- start admin Area -->
        <section class="unique-feature-area section-gap" id="produtcs">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10 text-white">Gerencie seus dados</h1>
                            <p>Mantenha-se atualizado</p>
                        </div>
                    </div>
                </div>						                

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
        <p>* Todos os seus dados são mantidos em total sigilo.</p>        
        <form method="POST" enctype="multipart/form-data" action="controller/update-users.php">
        <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputCity">ID</label>
      <input name="id_user" type="text" class="form-control" id="inputCity" placeholder="<?= $array['id']; ?>" value="<?= $array['id']; ?>" readonly=“true”>
    </div>        
    </div>
        <div class="form-row">
    <div class="form-group col-md-12">  
      <label for="inputEmail4">Nome</label>
      <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="<?php echo $array['nome']; ?>" required>
    </div>    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="<?php echo $array['email']; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input name="pass" type="password" class="form-control" id="inputPassword4" placeholder="Insira sua nova senha" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputZip">Telefone</label>
      <input name="tel" type="text" class="form-control" id="inputZip" placeholder="<?= $array['telefone']; ?>" required>
    </div>  
    <div class="form-group col-md-6">
      <label for="inputState">Imagem de perfil</label>
      <select name="pic" id="inputState" class="form-control">
        <option selected value ="cadoni.png">Cadoni</option>
        <option value="danilo.png">Danilo</option>
        <option value="diogo.png">Diogo</option>
        <option value="eugenio.png">Eugenio</option>
        <option value="henrique.png">Henrique</option>
        <option value="pedro.png">Pedro</option>
      </select>
    </div> 
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input name="city" type="text" class="form-control" id="inputCity" placeholder="<?= $array['cidade']; ?>" required>
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress">CEP</label>
    <input name="cep" type="text" class="form-control" id="inputAddress" placeholder="<?= $array['cep']; ?>" required>
  </div>    
  <div class="form-group col-md-4">
    <label for="inputAddress">Rua</label>
    <input name="street" type="text" class="form-control" id="inputAddress" placeholder="<?= $array['rua']; ?>" required>
  </div>    
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Confirmar mudanças
      </label>
    </div>
  </div>
  <button type="submit" class="genric-btn primary circle arrow">Atualizar</button>
</form>
      </div>
    </div>
  </div>
</section>

            </div>	
        </section>
        <!-- End admin Area -->
        
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



