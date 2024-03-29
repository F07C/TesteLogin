<?php

include('protect.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Impacta</title>

    <!---stylesheet-->
    <link rel="stylesheet" href="style.php">

    <!---google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">
    

    <!-----font awesome 4 cdn/content delivery network -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-------- header ------>
  <div class="container">

    <div class="navbar">
        <div class="logo">
             <a href="index.html"><img src="images/logo-livraria2.png" width="125px"></a>
            
        </div>
        <form action="pesquisa.php" method="post" class="form-inline">
  <input type="text" name="termo" placeholder="Pesquisar livros" id="search-item">
  <input type="submit" value="Pesquisar">
</form>
        <nav >
           
                
              
            <ul id="MenuItems">
                <li><a href="index2.php">Página Inicial</a></li>
                <li><a href="produtos.php">Acervo</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="index.php">Conta</a></li>
                <li><a href="categorias.php">Categorias</a></li>

                
            </ul>
          
        </nav>
        

        
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
  </div>
  </div>         
 
  <!-------- single product details-------------->
                <div class="small-container single-product">
                    <div class="row">
                        <div class="col-2">
                            <?php
                            $userimg = base64_encode($_SESSION['userimg']);
                            echo "<img src='data:image/jpeg;base64,$userimg' alt='Imagem do usuário' width='250px' heigth='200px' >";
                            ?>
                        
                      
                          <!--  <div class="smal-img-row">
                                <div class="small-img-col">
                                    <img src="./images/gallery-1.jpg" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="./images/gallery-2.jpg" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="./images/gallery-3.jpg" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="./images/gallery-4.jpg" width="100%" class="small-img">
                                </div>
                            </div> -->
                        </div>
                        <div class="col-2">
                            <?php
                            echo "Bem-vindo, ". $_SESSION['username'] . "!";                                                     
                            ?>
                            
                            <h4></h4>
                          <!--  <select>
                                <option>Select Size</option>
                                <option>XXL</option>
                                <option>XL</option>
                                <option>Large</option>
                                <option>Medium</option>
                                <option>Small</option>
                            </select> -->
                            
                            
                            
                            <a href="./PDF´S/Vol.1-Percy Jackson e o ladrão de raios.PDF" class="btn" target="_blank">Editar </a>
                            <a class="btn" href="logout.php">Logout </a>

                            <h3>Descrição </h3>
                            <p>Adicione seus livros favoritos a sua galeria e tenha acesso gratuito a conteudos exclusivos </p>
                        </div>
                    </div>
                </div>  

                 <!-------- title --------------->
                <div class="small-container">
                     <div class="row row-2">
                         <h2>Navegue pelo nosso site</h2>
                         
                     </div>
                </div>    


                 <!-------- products --------------->

                <div class="small-container" id="product-list">  
                    <div class="row">
                        <div class="col-4">
                           <a href="./DetalheHarry.html"> <img src="images/PaginaInicial.png"> </a>
                           
                            
                            <a href="index.html" class="btn" download>Página Inicial </a>
                        </div>

                        <div class="col-4">
                          <a href="./"> <img src="images/catalogo.png"></a>
                          
                           
                            <a href="index.html" class="btn" download>Catálogo </a>
                        </div>

                        <div class="col-4">
                           <a href=""> <img src="images/contato.png"> </a>
                            
                            <a href="index.html" class="btn" download>Contato </a>
                        </div>

                        <div class="col-4">
                           <a href=""> <img src="images/conta.png"> </a>
                           <a href="index.html" class="btn" download>Conta </a>
                        </div>
                    </div>
                </div>
                
    

                 <!-------brands ------->   
        <div class="brands">
            <div class="small-container">
               
            </div>
        </div>

 <!-------footer ------->   
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

<!------- js for product gallery --------->
       <script src="app.js"> </script>
        <script>
              
              var ProductImg = document.getElementById("ProductImg");
              var SmallImg = document.getElementsByClassName("small-img");


              SmallImg[0].onclick = function()
              {
                 ProductImg.src = SmallImg[0].src;
              }
              SmallImg[1].onclick = function()
              {
                 ProductImg.src = SmallImg[1].src;
              }
              SmallImg[2].onclick = function()
              {
                 ProductImg.src = SmallImg[2].src;
              }
              SmallImg[3].onclick = function()
              {
                 ProductImg.src = SmallImg[3].src;
              }
        </script>

</body>
</html>


    
   

