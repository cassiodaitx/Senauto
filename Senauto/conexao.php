<?php
    //PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
    $host = 'localhost';
    $bd = "senauto";
    $username = 'root';
    $senhabd = '';
    $userbid = $bd;
    $conexao = mysqli_connect($host, $username, $senhabd, $bd, '3306');
    //echo $conexao;    
    if (!$conexao)
        die("Erro de conexão com localhost, o seguinte erro ocorreu -> " . mysqli_error($error));
    //conectando com a tabela do banco de dados
    $banco = mysqli_select_db($conexao, $bd);
?>