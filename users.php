<?php 
include_once('controller/connect.php');
include_once('controller/session.php');
include_once('controller/config.php');

if($_SESSION['rank'] != 1) {
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
        <!-- Nucleo Icons -->
        <link href=css/nucleo-icons.css rel="stylesheet" />
    </head>
    <body>

          <header id="header" id="home">
          <?php
            include_once "components/nav-bar.php";
          ?>
          </header><!-- #header -->
        
        <div style="height: 200px"></div>    
        <section class="cad">	
        <div class="text-center"> 
          <br />							
          <h1 class="mb-10 text-white">Usuários</h1>
          <p>Gerencie todos os usuários cadastrados</p>
          <br>          
          </div> 
        </section>	
        <!-- start admin Area -->
        <section class="unique-feature-area section-gap" id="produtcs">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10 text-white">Gerenciamento de usuários</h1>
                            <p>Execute as ações abaixo listadas</p>
                        </div>
                    </div>
                </div>		            					
                <div class="row">
                    <table id="dt-fixed-footer" class="table" cellspacing="0" width="100%">
                      <?php
					              $sql = "SELECT * FROM user";
            		        $res = mysqli_query($con, $sql);
            
            		        //Captura o número de linhas retornadas do banco
            		        $num = mysqli_num_rows($res);
            
            		        //Transforma o $resultado em um array
            		        $array = mysqli_fetch_assoc($res); 
				              ?>
                        <thead>
                          <tr>
                            <th class="th-sm">ID
                            </th>
                            <th class="th-sm">Nome
                            </th>
                            <th class="th-sm">Email
                            </th>
                            <th class="th-sm">Ranking
                            </th>
                            <th class="th-sm">Updates
                            </th>
                            <th class="th-sm">Ação
                            </th>
                          </tr>
                        </thead>
                        
                        <tbody>
                      <?php do {?>
						            <td><?php echo $array['id'];?></td>
							          <td><?php echo $array['nome'];?></td>
							          <td><?php echo $array['email'];?></td>
							          <td>
								        <?php 
									        if($array['ranking'] == 0){
										        echo 'User';
								        	}
									        else {
										        echo 'Admin';
									        }
								        ?>	
							          </td>
							          <td>							        	
								        <?php
									        if($array['ranking'] == 0){
									        	echo '<a href="controller/tornar-adm.php?id=' . $array['id']. '" class="genric-btn primary-border circle arrow small">Tornar Admin<span class="lnr lnr-arrow-right"></span></a>';
									        }
									        else {                            
                            echo '<a href="controller/tornar-usuario.php?id=' . $array['id']. '" class="genric-btn primary-border circle arrow small">Tornar Usuário<span class="lnr lnr-arrow-right"></span></a>';
									        }
								        ?>
							          </td>
                        <td>                                                 
                          <a href="controller/excluir-usuario.php?id=<?php echo $array['id']?>">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm">
                              <i class="tim-icons icon-simple-remove"></i>
                            </button>
                          </a>
                        </td>
						          </tr>
						        <?php } while($array = mysqli_fetch_assoc($res))?>                                                   
                        </tbody>

                        <tfoot>
                          <tr>
                            <th>ID
                            </th>
                            <th>Nome
                            </th>
                            <th>Email
                            </th>
                            <th>Ranking
                            </th>
                            <th>Updates
                            </th>
                            <th>Ação
                            </th>
                          </tr>
                        </tfoot>

                      </table>       																	
                </div>                
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

        <script>
            $(document).ready(function () {
                $('#dt-fixed-footer').dataTable({
                    "paging": false,
                    "fnInitComplete": function () {
                        var myCustomScrollbar = document.querySelector('#dt-fixed-footer_wrapper .dataTables_scrollBody');
                        var ps = new PerfectScrollbar(myCustomScrollbar);
                    },
                    "scrollY": 450,
                });
            });
        </script>
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



