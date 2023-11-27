<?php
include('login.php');

// Validar o parâmetro
if (empty($_POST['termo'])) {
  echo "O campo 'termo' está vazio.";
  exit();
}

// Executar a consulta SQL
$sqlcode = "SELECT * FROM livros WHERE titulo LIKE '%{$_POST['termo']}%' OR autor LIKE '%{$_POST['termo']}%';";
$resultado = mysqli_query($mysqli, $sqlcode);

// Verificar se o livro foi encontrado
if ($resultado->num_rows == 0) {

  echo "Livro não encontrado.";
  exit();
}

// Obter o livro

$livro = mysqli_fetch_assoc($resultado);

// Exibir os detalhes do livro
echo "<h1>Detalhes do livro</h1>";
echo "<h2>Título</h2>";
echo "<p>{$livro['titulo']}</p>";
echo "<h2>Autor</h2>";
echo "<p>{$livro['autor']}</p>";
echo "<h2>Ano de publicação</h2>";
echo "<p>{$livro['ano_publicacao']}</p>";

echo "<h2>Imagem do livro</h2>";
echo "<img src='data:image/jpeg;base64,".base64_encode($livro['imagem'])."' alt='Imagem do Livro' width='200' height='200'>";


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
    <link rel = "stylesheet" href="style2.php">

    <!---google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">

    <!-----font awesome  cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

