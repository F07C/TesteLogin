
<?php

    if(isset($_POST['submit']))
    {
        include_once('login.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $sugestao = $_POST['sugestao'];
        $result = mysqli_query($mysqli, "INSERT INTO formulario(nome, sobrenome, email, sugestao) VALUES ('$nome','$sobrenome','$email','$sugestao')");  
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>ENVIAR MENSAGEM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Chronicle Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="style.php" type="text/css" rel="stylesheet" media="all">
    <link href="bootstrap.php" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="shop.php" type="text/css" rel="stylesheet" media="all">
    <link href="style2.php" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>


<body >
   
    <div class="container">

        <div class="navbar">
              <div class="logo">
                   <a href="./index2.php"><img src="./images/logo-livraria2.png" width="215 px"></a>
              </div>
              <nav >
                  <ul id="MenuItems">
                      <li><a href="./index2.php">Página Inicial</a></li>
                      <li><a href="./produtos.php">Catálogo</a></li>
                     
                      <li><a href="contato.php">Contato</a></li>
                      <li><a href="./index.php">Conta</a></li>
                  </ul>
              </nav>
    
              <a href="./cart.php"><img src="./images/cart.png" width="30px" height="30px"></a>
              <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div> 
      </div> 
    
       
                     
                    
                    <!-- /.navbar-collapse -->
                   
                </div>
                <!-- /.container -->
            </div>
        </nav>
       
        </div>
      
        <div class="section contact" id="contact">
            <div class="container">
                
                <div class="contact-form">
                    <div class="col-md-7">
                        <!-- contact form grid -->
                        <div class="contact-top1">
                            <form action="contato.php" method="POST">
                                <fieldset>
                                <h5>Deixe aqui sua sugestão</h5>
                                <div class="inputBox">
                                    <input type="text" placeholder="Nome" name="nome" id="nome" class="form_w3layouts" required >                                   
                                    <input type="text" placeholder="Sobrenome"  name="sobrenome" id="sobrenome" class="inputUser" required >
                                    <input type="email" placeholder="E-mail"  name="email" id="email" class="inputUser" required >
                                    <textarea placeholder="Deixe aqui sua Sugestão" name="sugestao" id="sugestao" class="inputUser" required=""></textarea>
                                    <input type="submit" name="submit" id="submit">
                                </div>
                                </fieldset>
                            </form> 
                            
                        </div>
                        <!--  //contact form grid ends here -->
                    </div>
                    <!-- contact map grid -->
                    
                    <!--//contact map grid ends here-->
                    <div class="clearfix">
                        <img src="/images/image.png" alt=""  width="30%">
                    </div>
                </div>
                <!-- contact details -->
                <div class="contact-bottom">
                  
                    <!-- contact details left -->
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-left">
                            <div class="address">
                             
                            </div>
                            <div class="address address-mdl">
                                
                            </div>
                        </div>
                    </div>
                    <!-- //contact details left -->
                    <!-- contact details right -->
                    <div class="col-md-6 col-sm-6">
                        
                            <div class="address">
                               
                            </div>
                        
                               
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //contact-details right -->
                    <div class="clearfix"></div>
                </div>
                <!-- //contact details ends here -->
            </div>
        </div>
        <!-- //contact -->
   <!-- footer -->
   <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download do App</h3>
                <p>Download do App para Android e Ios.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/impacta.png">
                <p>Impacta -  o conhecimento é livre: A leitura é a chave para o conhecimento, a transformação e um futuro melhor.</p>
            </div>
            <div class="footer-col-3">
                <h3>Menu</h3>
                <ul>
                   <li>Página Inicial </li> 
                    <li>Livros</li>
                    <li>Blog</li>
                    <li>Conta</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Redes Sociais</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instragram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="Copyright">Copyright-2023 - Gui Falcão</p>
    </div>
</div>
   
<!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>