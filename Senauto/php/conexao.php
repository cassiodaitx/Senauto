<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    //PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
    $host = 'localhost';
    $bd = "site";
    $username = 'root';
    $senhabd = '';
    $userbid = $bd;
    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
    $nome = $_POST["nome"]; //atribuição do campo "nome" vindo do formulário para variavel
    $email = $_POST["email"]; //atribuição do campo "email" vindo do formulário para variavel
    $endereco = $_POST["endereco"]; //atribuição do campo "endereco" vindo do formulário para variavel
    $cidade = $_POST["cidade"]; //atribuição do campo "cidade" vindo do formulário para variavel
    $estado = $_POST["estado"]; //atribuição do campo "estado" vindo do formulário para variavel
    //Gravando no banco de dados !
    //conectando com o localhost - mysql
    $conexao = mysqli_connect($host, $username, $senhabd, $bd, '3306');
    //echo $conexao;    
    if (!$conexao)
        die("Erro de conexão com localhost, o seguinte erro ocorreu -> " .mysqli_error($conexao));
    //conectando com a tabela do banco de dados
    $banco = mysqli_select_db($conexao, $bd);
    if (!$banco)
        die("Erro de conexão com banco de dados, o seguinte erro ocorreu -> " .mysqli_error($conexao));
    $query = "INSERT INTO usuarios ( nome_usuario , email_usuario, endereco_endereco , cidade_usuario , uf_usuario)
VALUES ('$nome', '$email', '$endereco', '$cidade', '$estado')";
    mysqli_query($conexao, $query);
    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
    ?>
</body>

</html>