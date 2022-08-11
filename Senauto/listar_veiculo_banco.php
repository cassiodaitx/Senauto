<?php
include_once('conexao.php');

$query = "SELECT * FROM veiculos";

$sql = mysqli_query($conexao, $query);
?>