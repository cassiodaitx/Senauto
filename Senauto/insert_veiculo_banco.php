<?php
include_once('conexao.php');

$nome_veiculo = $_POST["nome_veiculo"];
$ano_veiculo = $_POST["ano_veiculo"];
$preco_veiculo = $_POST["preco_veiculo"];

$query = "INSERT INTO veiculos (nome_veiculo, ano_veiculo, preco_veiculo) 
VALUES ('".$nome_veiculo."', '".$ano_veiculo."', '".$preco_veiculo."');";

mysqli_query($conexao, $query);
header('Location: cadastro_veiculo.php')
?>