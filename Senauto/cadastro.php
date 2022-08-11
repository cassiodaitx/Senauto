<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    include_once('conexao.php');

    // RECEBENDO OS DADOS PREENCHIDOS DO FORMULARIO !
    $Nome = $_POST["nome"]; //atribuicao do campo "nome" vindo do formulario para variavel
    $Email = $_POST["email"]; //atribuicao do campo "email" vindo do formulario para variavel
    $DDD = $_POST["ddd"]; //atribuicao do campo "ddd" vindo do formulario para variavel
    $Telefone = $_POST["telefone"]; //atribuicao do campo "telefone" vindo do formulario para variavel
    $Login = $_POST["login"]; //atribuicao do campo "login" vindo do formulario para variavel
    $Senha = $_POST["senha"]; //atribuicao do campo "senha" vindo do formulario para variavel
    //Gravando no banco de dados !
    $str_add = "INSERT INTO members (Nome, Email, DDD, Telefone, Login, Senha) 
    values('$Nome','$Email','$DDD','$Telefone','$Login','$Login')";

    $result = mysqli_query($conexao, $str_add);

    if ($result){
        echo "Cadastrado com sucesso";
    } else {
        echo "Falhou em casdastrar";
    }

    mysqli_close($conexao);
    //conectando com o localhost - mysql
    ?>
</body>

</html>