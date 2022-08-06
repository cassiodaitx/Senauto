<?php
    if (isset($_COOKIE["login"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function validaCampo() {
    if (document.cadastro_veiculo.nome_veiculo.value == "") {
        alert("O campo modelo é obrigatório!");
        return false;
    } else
    if (document.cadastro_veiculo.ano_veiculo.value == "") {
        alert("O campo ano é obrigatório!");
        return false;
    } else
    if (document.cadastro_veiculo.preco_veiculo.value == "") {
        alert("O campo preço é obrigatório!");
        return false;
    } else
    return true;
    }
    
    </script>
    <title>Cadastro de Veículos - Senauto</title>
</head>
<body>
    <form enctype="multipart/form-data" id="cadastro_veiculo" name="cadastro_veiculo" method="post" onsubmit="return validaCampo()" action="insert_veiculo_banco.php">
        <table>
            <tr>
                <td>Modelo:</td>
                <td><input placeholder="Ex: Volkswagen Golf GTI" name="nome_veiculo" id="nome_veiculo" maxlength="50" type="text"></td>
            </tr>
            <tr>
                <td>Ano:</td>
                <td><input placeholder="Ex: 2015" name="ano_veiculo" id="ano_veiculo" maxlength="4" type="text"></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input placeholder="Ex: R$87.860,00" name="preco_veiculo" id="preco_veiculo" maxlength="20" type="text"></td>
            </tr>
            <tr>
                <td>Imagem:</td>
                <td><input name="imagem_veiculo" id="imagem_veiculo" type="file"></td>
            </tr>
            <tr>
                <td><input value="Cadastrar" type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
    } else {
        header('Location: login.html');  
    }
?>