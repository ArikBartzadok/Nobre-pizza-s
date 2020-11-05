<div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="index.php"><img src="img/logo-2.png" alt="" title="" style="height: 20px;" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="index.php#home">Home</a></li>
                      <li><a href="produtos.php">Produtos</a></li>
                      <li><a href="index.php#about">Saiba +</a></li>
                      <li><a href="index.php#different">Diferenciais</a></li>
                      <li><a href="index.php#filiais">Filiais</a></li>
                      <li><a href="index.php#produtcs">Destaques</a></li>
                      <li><a href="index.php#review">Review</a></li>
                      <li><a href="index.php#faq">FAQ</a></li>
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