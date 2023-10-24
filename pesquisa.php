<?php
include('login.php');



    $sqlcode = "SELECT * FROM livros WHERE titulo LIKE '%{$_POST['termo']}%' OR autor LIKE '%{$_POST['termo']}%';";
    $resultado = mysqli_query($mysqli, $sqlcode);
    
  
    
 ?>
        

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel = "stylesheet" href="estilo.php">

  <title>Detalhes do livro</title>
</head>
<body>

  <h1>Detalhes do livro</h1>
<?php
$id = $_GET['id'];


$sql = "SELECT * FROM livros WHERE id = $id;";
$resultado = mysqli_query($mysqli, $sqlcode);


if ($resultado->num_rows == 0) {
 
  echo "Livro não encontrado.";
  exit();
}


$livro = mysqli_fetch_assoc($resultado);


?>

<h2>Título</h2>
<p><?php echo $livro['titulo']; ?></p>

<h2>Autor</h2>
<p><?php echo $livro['autor']; ?></p>

<h2>Ano de publicação</h2>
<p><?php echo $livro['ano_publicacao']; ?></p>

<?php







?>
  

   
</body>
</html>