<?php
include('login.php');


if (isset($_POST['termo'])) {
    // Realizar a pesquisa
    $sql = "SELECT * FROM livros WHERE titulo LIKE '%{$_POST['termo']}%' OR autor LIKE '%{$_POST['termo']}%';";
    $resultado = mysqli_query($mysqli, $sqlcode);
  
    if (mysqli_num_rows($resultado) > 0) {
      // Livros encontrados
      ?>
  
      <ul>
        <?php while ($livro = mysqli_fetch_assoc($resultado)): ?>
          <li>
            <a href="livro.php?id=<?php echo $livro['id']; ?>">
              <?php echo $livro['titulo']; ?>
            </a>
            <p>Por <?php echo $livro['autor']; ?></p>
            <p>Publicado em <?php echo $livro['ano_publicacao']; ?></p>
          </li>
        <?php endwhile; ?>
      </ul>
  
      <?php
    } else {
      // Nenhum livro encontrado
      echo "Nenhum livro encontrado.";
    }
  }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo da Página-->
    <title> Livraria - Impacta </title>

    <!---stylesheet-->
    <link rel = "stylesheet" href="style.php">

    <!---google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">

    <!-----font awesome  cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-------- header ------>

<div class="header">
  <div class="container">

    <div class="navbar">
          <div class="logo">
               <a href="index2.php"><img src="images/logo-livraria2.png" width="150px"></a>
          </div>
          <form action="pesquisa.php" method="post">
  <input type="text" name="termo" placeholder="Pesquisar livros">
  <input type="submit" value="Pesquisar">
</form>
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

    <div class="row">
        <div class="col-2">
             <h1>Transforme sua leitura em um novo estilo!</h1>
             <p>
               
                Pranik Books: A aventura da leitura

                A leitura é uma aventura que pode nos levar a lugares e tempos desconhecidos. <br> <br> É uma forma de aprendermos sobre o mundo e sobre nós mesmos. Mas, com tantas opções disponíveis, pode ser difícil encontrar o livro certo para cada momento. <br> <br>

                Pranik Books é uma solução para quem quer aproveitar ao máximo a leitura. 
             </p>
             <a href="" class="btn">Explorar  &#8594;</a>
        </div>
        <div class="col-2">
             <img src="images/livros.png">
        </div>
    </div>
  </div> 
</div>


<!-------------------- featured categories 
             
            <div class="categories">
                <div class="small-container">
                   <div class="row">
                        <div class="col-3">
                            <img src="./images/lendo.avif" >
                        </div>
                        <div class="col-3">
                            <img src="./images/category-2.jpg" >
                        </div>
                        <div class="col-3">
                            <img src="./images/category-3.jpg" >
                        </div>
                   </div>
                </div>   
            </div>-------------------->

<!-------------------- featured products -------------------->            
 
                <div class="small-container">
                    <h2 class="title">Mais Vendidos</h2>
                    <div class="row">
                        <div class="col-4">
                            <a href="DetalhePercy.php"><img src="images/percy.jpg"></a>
                            <a href="DetalhePercy.php"><h4>Percy Jackson e o Ladrão de Raios </h4></a>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$34,65</p>
                        </div>

                        <div class="col-4">
                           <a href="DetalheHarry.php"> <img src="images/harry.jpeg"></a>
                           <a href="DetalheHarry.php"> <h4>Harry Potter e o Prisioneiro de Askaban</h4></a>
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
                           <a href="DetalheVolta.php"> <img src="images/volta.jpg"></a>
                           <a href="DetalheVolta.php"> <h4>A Volta ao mundo em 80 <br> dias </h4></a>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o" ></i>
                            </div>
                            <p>R$21,99</p>
                        </div>

                        <div class="col-4">
                           <a href="DetalheMemoria.php"> <img src="images/memoria postumas de bras cubas.jpg"></a>
                          <a href="DetalheMemoria.php">  <h4>Memoria Póstumas de Brás Cubas</h4></a>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$45,00</p>
                        </div>
                    </div>

                    <h2 class="title">Livros Disponíveis</h2>
                    <div class="row">
                        <div class="col-4">
                            <img src="images/Ocortiço.webp">
                            <h4>O Cortiço</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$47,80</p>
                        </div>

                        <div class="col-4">
                            <img src="images/DomCasmurro.jpg">
                            <h4>Dom Casmurro</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$19,90</p>
                        </div>

                        <div class="col-4">
                            <img src="images/QuincasBorba.jpg">
                            <h4>Quincas Borba</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o" ></i>
                            </div>
                            <p>R$48,50</p>
                        </div>

                        <div class="col-4">
                            <img src="images/Icaro.jpg">
                            <h4>Ícaro </h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$36,00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img src="images/OsLusiadas.jpg">
                            <h4>Os Lusiadas</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>R$18,79</p>
                        </div>

                        <div class="col-4">
                            <img src="./images/OutrosJeitosDeUsarABoca.jpg">
                            <h4>Outros Jeitos de Usar a Boca</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>$50.00</p>
                        </div>

                        <div class="col-4">
                            <img src="images/HarryPottereaPedraFilosofal.jpeg">
                            <h4>Harry Potter e a Pedra Filosofal</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o" ></i>
                            </div>
                            <p>$50.00</p>
                        </div>

                        <div class="col-4">
                            <img src="images/PercyJacksonEoMarDeMonstros.jpg">
                            <h4>Percy Jackson e o Mar de Monstros</h4>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>

        <!-------offer ------->
            <div class="offer">
                <div class="small-container">
                    <div class="row">
                        <div class="col-2">

                           <img src="images/DeSuaSugestão.png" class="offer-img">
                        </div>
                        <div class="col-2">
                             <p>Deixe aqui sua sugestão</p>
                             <h1> Qual livro podemos adicionar ?</h1>
                             <small>
                                Clique no botão abaixo e mande a uma mensagem para nós, com o nome do livro e nome
                                 do autor que iremos avaliar a disponibilidade do livro para ser adicionado ao site. <br>
                             </small>
                             <a href="contato.php" class="btn">Enviar mensagem &#8594;</a>
                        </div>
                    </div>
                </div>
            </div> 
            
        <!-------testimonial ------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste quaerat dolores mollitia nisi dignissimos. Ea corrupti consequuntur aut doloremque quod, excepturi, natus placeat dolores ad commodi, minus vel alias.
                        </p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/jkrolling.webp" >
                        <h3>J.K Rolling</h3>
                    </div>

                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste quaerat dolores mollitia nisi dignissimos. Ea corrupti consequuntur aut doloremque quod, excepturi, natus placeat dolores ad commodi, minus vel alias.
                        </p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/rick riodan.jpg" >
                        <h3>Rick Riodan</h3>
                    </div>

                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iste quaerat dolores mollitia nisi dignissimos. Ea corrupti consequuntur aut doloremque quod, excepturi, natus placeat dolores ad commodi, minus vel alias.
                        </p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images/jkrolling.webp" >
                        <h3>Rupi Kaur</h3>
                    </div>
                </div>
            </div>
        </div>

     <!-------brands ------->   
        <div class="brands">
            <div class="small-container">
               <!-- <div class="row">
                    <div class="col-5">
                        <img src="./images/logo-godrej.png">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-oppo.png">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-coca-cola.png">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-paypal.png">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-philips.png">
                    </div>
                </div> -->
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


</body>
</html>

