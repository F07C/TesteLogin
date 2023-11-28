<?php
include('login.php');

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>

    <!---stylesheet-->
    <link rel="stylesheet" href="./style.php">

    <!---google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">

    <!-----font awesome 4 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-------- header ------>
  <div class="container">

    <div class="navbar">
          <div class="logo">
               <a href="./index.html"><img src="./images/logo-livraria2.png" width="125 px"></a>
          </div>
          <form action="pesquisa.php" method="post">
  <input type="text" name="termo" placeholder="Pesquisar livros">
  <input type="submit" value="Pesquisar">
</form>
          <nav >
          
              <ul id="MenuItems">
                  <li><a href="./index.html">Pagina Inicial</a></li>
                  <li><a href="./produtos.html">Catálogo</a></li>
                  <li><a href="./contato.html">Contato</a></li>
                  <li><a href="./account.html">Conta</a></li>
              </ul>
          </nav>

          
          <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div> 
  </div>         
 
                <div class="small-container">
                        <br> <br> <br> <br>
                    

                    <div class="cogido">
                        <div class="categoria">
                           <div class="titulo">Fantasia</div>
                           <a href="produtos.php?categoria=Fantasia">
                            <img src="/TESTELOGIN/images/fantasia.png" width="100px">
                           </a>                       
                            
                         </div>
                      <div class="categoria">
                        <div class="titulo"><h4>Ficção científica</h4></div>
                        <a href="produtos.php?categoria=FicçãoCientífica">
                         <img src="/TESTELOGIN/images/ficcao.png" width="100px">
                        </a>
                      </div>
                      <div class="categoria">
                        <div class="titulo">Ação e aventura</div>
                         <a href="produtos.php?categoria=AçãoeAventura">
                         <img src="/TESTELOGIN/images/acao.png" width="100px">
                        </a>
                      </div>
                      <div class="categoria">
                        <div class="titulo">Suspense</div>
                        <a href="produtos.php?categoria=Suspense">
                         <img src="/TESTELOGIN/images/suspense.png" width="100px">
                         </a>
                      </div>
                      <div class="categoria">
                        <div class="titulo">Biografia</div>
                        <a href="produtos.php?categoria=Biografia">
                         <img src="/TESTELOGIN/images/bio.png" width="100px">
                         </a>
                      </div>
                     
                     
                     </div>
                        <br> <br> <br> <br> <br><br>



                </div>

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
                <img src="images/logo-livraria2.png">
                <p>Livraria do Povo -  o conhecimento é livre: A leitura é a chave para o conhecimento, a transformação e um futuro melhor.</p>
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
   
<!-------js for toggle menu--------->

       <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if( MenuItems.style.maxHeight == "0px"){

                    MenuItems.style.maxHeight = "200px";
                }
                else{
                    MenuItems.style.maxHeight = "0px";
                }
            }





       </script>


</body>
</html>