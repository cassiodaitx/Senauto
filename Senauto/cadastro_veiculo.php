<?php
    if (isset($_COOKIE["login"])){
        include_once('conexao.php');
        if (isset($_GET["excluir"])){
            $id = $_GET["excluir"];
            $query = "DELETE FROM veiculos WHERE id_veiculo = '$id';";      
            $sql = mysqli_query($conexao, $query);
        }
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/cadastro_veiculo_style.css">
    <title>Cadastro de Veículos - Senauto</title>
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
</head>
<body>
    <form enctype="multipart/form-data" id="cadastro_veiculo" name="cadastro_veiculo" method="post" onsubmit="return validaCampo()" action="insert_veiculo_banco.php">
        <table class="tabela_cadastrar">
            <tr>
                <td class="inst">Modelo:</td>
                <td><input class="placeholder" placeholder="Ex: Volkswagen Golf GTI" name="nome_veiculo" id="nome_veiculo" maxlength="50" type="text"></td>
            </tr>
            <tr>
                <td class="inst">Ano:</td>
                <td><input class="placeholder" placeholder="Ex: 2015" name="ano_veiculo" id="ano_veiculo" maxlength="4" type="text"></td>
            </tr>
            <tr>
                <td class="inst">Preço:</td>
                <td><input class="placeholder" placeholder="Ex: R$87.860,00" name="preco_veiculo" id="preco_veiculo" maxlength="20" type="text"></td>
            </tr>
            <tr>
                <td class="inst">Imagem:</td>
                <td><input class="imagem_veiculo" name="imagem_veiculo" id="imagem_veiculo" type="file"></td>
            </tr>
            <tr>
                <td class="inst"><input class="btcadastrar" value="Cadastrar" type="submit"></td>
            </tr>
        </table>
    </form>

        <table class="tabela_excluir">
            <?php
                                
                $query = "SELECT * FROM veiculos";
                
                $sql = mysqli_query($conexao, $query);

                while ($i = mysqli_fetch_array($sql)) {
                    echo
                    '<tr>
                    <td><a href="cadastro_veiculo.php?excluir=' .$i["id_veiculo"]. '">' .$i["id_veiculo"]. '</a></td>'.
                    '<td>' .$i["nome_veiculo"]. '</td>'.
                    '<td>' .$i['ano_veiculo']. '</td>'.
                    '<td>' .$i['preco_veiculo']. '</td>
                    </tr>';
                }
            ?>

        </table>
    </form>
</body>
</html>
<?php
    } else {
        header('Location: login.html');  
    }
?>

<tr>
    <td>
        $
    </td>
    <td>

    </td>
    <td>

    </td>
</tr>