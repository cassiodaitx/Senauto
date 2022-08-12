<?php
include_once('conexao.php');
include_once('upload.php');

$nome_veiculo = $_POST["nome_veiculo"];
$ano_veiculo = $_POST["ano_veiculo"];
$preco_veiculo = $_POST["preco_veiculo"];

$query = "INSERT INTO veiculos (nome_veiculo, ano_veiculo, preco_veiculo, filename_veiculo) 
VALUES ('".$nome_veiculo."', '".$ano_veiculo."', '".$preco_veiculo."', '".$caminho."');";

mysqli_query($conexao, $query);
header('Location: cadastro_veiculo.php');
?>