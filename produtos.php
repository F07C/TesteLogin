
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de livros</title>

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
               <a href="./index2.php"><img src="./images/logo-livraria2.png" width="125 px"></a>
          </div>
          <form action="pesquisa.php" method="post">
  <input type="text" name="termo" placeholder="Pesquisar livros">
  <input type="submit" value="Pesquisar">
</form>
          <nav >
            
              <ul id="MenuItems">
                  <li><a href="./index.php">Pagina Inicial</a></li>
                  <li><a href="./products.php">Acervo</a></li>
                  <li><a href="contato.php">Contato</a></li>
                  <li><a href="./account.php">Conta</a></li>
                  <li><a href="categorias.php">Categorias</a></li>

              </ul>
          </nav>

           <a href="./cart.php"><img src="./images/cart.png" width="30px" height="30px"></a>
          <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div> 
  </div>         
 
                <div class="small-container">
                <?php
// produtos.php

// Verifica se a categoria foi passada como parâmetro
$conn = new mysqli("localhost", "root", "Fil@202810", "biblioteca");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Função para buscar todos os livros de uma categoria
function buscarLivrosPorCategoria($conn, $categoria) {
    $livrosEncontrados = [];

    // Consulta SQL para buscar livros por categoria
    $sql = "SELECT * FROM livros WHERE categoria = ?";

    // Prepara a consulta
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $categoria);
    
    // Executa a consulta
    $stmt->execute();

    // Obtém o resultado
    $result = $stmt->get_result();

    // Transforma o resultado em um array associativo
    while ($livro = $result->fetch_assoc()) {
        $livrosEncontrados[] = $livro;
    }

    // Fecha a consulta
    $stmt->close();

    return $livrosEncontrados;
}

// Verifica se a categoria foi passada como parâmetro

// ...

// Verifica se a categoria foi passada como parâmetro
if (isset($_GET['categoria'])) {
    $categoriaDesejada = $_GET['categoria'];

    // Chamando a função buscarLivrosPorCategoria com a categoria desejada
    $livrosDaCategoria = buscarLivrosPorCategoria($conn, $categoriaDesejada);

    // Exibindo todos os livros da categoria encontrados
    echo '<div class="row">';
    foreach ($livrosDaCategoria as $livro) {
        echo '<div class="col-4">';
        echo "<img src='data:image/jpeg;base64,".base64_encode($livro['imagem'])."' alt='Imagem do Livro' class='img-fluid'>";
        echo "<p><strong>Titulo</strong>: {$livro['titulo']}</p>";
        echo "<p><strong>Categoria</strong>: {$livro['categoria']}</p>";
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhuma categoria selecionada.";
}
// ...
?>
                    

                    

                    

                    




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