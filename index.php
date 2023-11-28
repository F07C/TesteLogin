<?php
include('login.php');


if (isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu email";

    } else if (strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";

    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['username'] = $usuario['username'];
            $_SESSION['userimg'] = $usuario['userimg'];
            echo "Bem-vindo, " . $_SESSION['username'] . "!";

            


            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.php">
    <title>Document</title>
</head>
<body>

<!-------- header ------>
<div class="container">

<div class="navbar">
      <div class="logo">
           <a href="./index.html"><img src="./images/logo-livraria2.png" width="215 px"></a>
      </div>
      <form action="pesquisa.php" method="post">
  <input type="text" name="termo" placeholder="Pesquisar livros">
  <input type="submit" value="Pesquisar">
</form>
      <nav >
          <ul id="MenuItems">
              <li><a href="./index2.php">Página Inicial</a></li>
              <li><a href="./produtos.php">Catálogo</a></li>
              <li><a href="./categorias.php">Categorias</a></li>
              <li><a href="contaro.p">Contato</a></li>
              <li><a href="./acco.html">Conta</a></li>
          </ul>
      </nav>

      <a href="./cart.html"><img src="./images/cart.png" width="30px" height="30px"></a>
      <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
</div> 
</div> 

<!-------account page ------->   
<div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="./images/livros.png" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="register()">Entrar</span>
                                    
                            </div>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text"  name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password"  name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>

    </form>
    </div>
                    </div>
                </div>
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

       <!-------js for toggle form--------->

       <script>
           
           var Loginform = document.getElementById("Loginform");
           var Regform =  document.getElementById("Regform");
           var indicator =  document.getElementById("indicator");


           function register(){
               
            Regform.style.transform = "translateX(0px)";
            Loginform.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
           }
           function login(){
               
               Regform.style.transform = "translateX(300px)";
               Loginform.style.transform = "translateX(300px)";
               indicator.style.transform = "translateX(0px)";
          }

       </script>

    
</body>
</html>
