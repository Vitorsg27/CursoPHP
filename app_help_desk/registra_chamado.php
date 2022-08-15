<?php
session_start();

print_r($_POST);

$texto = $_SESSION['id'] . '#' . $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;
echo $texto;

$arquivo = fopen('arquivo.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: abrir_chamado.php');
?>