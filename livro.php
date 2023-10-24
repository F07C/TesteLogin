<?php

include('login.php');

// Obter o ID do livro do URL
$id = $_GET['id'];

// Obter as informações do livro do banco de dados
$sql = "SELECT * FROM livros WHERE id = $id;";
$resultado = mysqli_query($mysqli, $sqlcode);
$livro = mysqli_fetch_assoc($resultado);

// Obter o caminho da imagem
$caminho_da_imagem = "/harry.jpeg{$livro['imagem']}";

?>

<img src="<?php echo $caminho_da_imagem; ?>" alt="Imagem do livro">
