
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
             <a href="index2.php"><img src="images/logo-impacta.png" width="125px"></a>
        </div>
        <nav >
            <ul id="MenuItems">
                <li><a href="index2.php">Página Inicial</a></li>
                <li><a href="produtos.php">Catálogo</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="index.php">Conta</a></li>
            </ul>
        </nav>

        <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
  </div>
  </div>         
 
  <!-------- single product details-------------->
                <div class="small-container single-product">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/percy.jpg" width="100%" id="ProductImg">

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
                            <p>Home / T-Shirt</p>
                            <h1>Percy Jackson e o Ladrão de Raios </h1>
                            <h4>R$34,65</h4>
                          <!--  <select>
                                <option>Select Size</option>
                                <option>XXL</option>
                                <option>XL</option>
                                <option>Large</option>
                                <option>Medium</option>
                                <option>Small</option>
                            </select> -->
                            
                            <a href=""  class="btn">Acessar Online</a>

                            <h3>Descrição<i class="fa fa-indent"></i> </h3>
                            <p>O garoto-problema Percy Jackson é um deles. Tem experiências estranhas em que deuses e monstros mitológicos parecem saltar das páginas dos livros direto para a sua vida. Pior que isso: algumas dessas criaturas estão bastante irritadas.</p>

                        </div>
                    </div>
                </div>  

                 <!-------- title --------------->
                <div class="small-container">
                     <div class="row row-2">
                         <h2>Livros Recomendados</h2>
                         
                     </div>
                </div>    


                 <!-------- products --------------->

                <div class="small-container">  
                    <div class="row">
                        <div class="col-4">
                            <img src="images/harry.jpeg">
                            <h4>Harry Potter e o Prisioneiro de Askaban</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$43,92</p>
                        </div>

                        <div class="col-4">
                            <img src="images/HarryPottereaPedraFilosofal.jpeg">
                            <h4>Harry Potter e a Pedra Filosofal</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$43,92</p>
                        </div>

                        <div class="col-4">
                            <img src="images/PercyJacksonEoMarDeMonstros.jpg">
                            <h4>Percy Jackson e o Mar de Monstros</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o" ></i>
                            </div>
                            <p>R$34,65</p>
                        </div>

                        <div class="col-4">
                            <img src="images/OutrosJeitosDeUsarABoca.jpg">
                            <h4>Outros Jeitos de Usar <br> a Boca</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$50.00</p>
                        </div>
                    </div>
                  <!--  <div class="page-btn">
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>4</span>
                        <span>&#8594;</span>
                    </div> -->
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