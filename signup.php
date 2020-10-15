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
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>

          <header id="header" id="home">
          <?php
            include_once "components/nav-bar.php";
          ?>
          </header><!-- #header -->

        <!-- start login Area -->
        <div style="height: 100px"></div>
        <div class="container">
            <div class="row">
              <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                  <div class="card-img-left d-none d-md-flex">
                     <!-- Background image for card set in CSS! -->
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-center">Registrar | Casa Nova</h5>
                    <form class="form-signin" method="POST" enctype="multipart/form-data" action="controller/cad-user.php">
                      <div class="form-label-group">
                        <input name="nome" type="text" id="inputUserame" class="form-control" placeholder="Usuário" required autofocus>
                        <label for="inputUserame">Usuário</label>
                      </div>
        
                      <div class="form-label-group">
                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                        <label for="inputEmail">Email</label>
                      </div>                                        
        
                      <div class="form-label-group">
                        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                        <label for="inputPassword">Senha</label>
                      </div>

                      <!--<div class="form-label-group">                                            
                        <label for="exampleFormControlFile1">Imagem de perfil</label>
                        <br />
    						        <input type="file" class="form-control-file" name="pic" accept="image/*" required>
                      </div>      -->        

                      <hr class="my-4">
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registar</button>

                      <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>                    
                      
                      <hr>

                      <a class="d-block text-center mt-2 small" href="login.php">Já sou cadastrado | Login</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <section class="signup">
          
        </section>
        <!-- End login Area -->
        
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



