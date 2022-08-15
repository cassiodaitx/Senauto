<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/veiculos_style.css">
  <link rel="stylesheet" href="assets/css/veiculos_style_2.css">
  <link rel="stylesheet" href="assets/css/veiculos_style_media_query.css">
  <link rel="icon" href="assets/img/iconsite.png" type="image/x-icon">
  <title>Veículos - Senauto</title>
</head>

<body>
<input id="close-menu" class="close-menu" type="checkbox">
  <label class="close-menu-label" title="close-menu" for="close-menu"></label>
  <aside class="menu">
    <section class="main-content menu-content">
      <a href="index.html"><img class="logo" src="assets/img/senautologo.png" alt="logo" /></a>
      <nav class="main-nav">
        <ul onclick="getElementById('close-menu').checked = false;">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="veiculos.php">Veículos</a>
          </li>
          <li>
            <a href="index.html">Contato</a>
          </li>
          <li>
            <a href="index.html">Sobre</a>
          </li>
        </ul>
      </nav>
    </section>
  </aside>
  <a href="index.html"><img class="logopreto" src="assets/img/logopreto.png" alt="logo"></a>
  <section>
    <div class="carros">
      <?php
      include_once('conexao.php');
      $num = 1;
      $class = 'carro-lista carro_lista--"$num"';
      $select = "SELECT * FROM veiculos";
      $qr = mysqli_query($conexao, $select);
      $i = 1;
      while ($ln = mysqli_fetch_array($qr)) {
        echo '
            <figure class="carro-lista carro_lista--' . $i . '">
        <img src="' . $ln['filename_veiculo'] . '" class="carro-img" alt="carro' . $i . '">
          <div class="carro-descricao">
            <p>' . $ln['nome_veiculo'] . '</p>
            <p>' . $ln['ano_veiculo'] . '</p>
            <p class="carro-preco">' . $ln['preco_veiculo'] . '</p>
          </div>
      </figure>
            ';
        $i += 1;
      }
      ?>
    </div>
  </section>
</body>

</html>