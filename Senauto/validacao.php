<?php
include_once('conexao.php');

if (empty($_POST['usuario']) || empty([$_POST['senha']])) {
  header('location:login.html');
  exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT usuario, senha FROM login where usuario = '{$usuario}' AND senha = '{$senha}'";

$result = mysqli_query($conexao, $query); 

$row = mysqli_num_rows($result);

if($row == 1){
  $_SESSION['usuario'] = $usuario;
  setcookie("login",$usuario);
  header('Location: cadastro_veiculo.php');
  exit();
}else{
  echo "<script> alert('Login ou senha inválidos') </script>";
  header('Location: login.html');
}
?>