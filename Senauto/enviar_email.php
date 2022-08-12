<?php
  date_default_timezone_set('America/Sao_Paulo');

  $nome = $_POST['contato-nome'];
  $email = $_POST['contato-email'];
  $mensagem = $_POST['contato-msg'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  $destino = "senautoautomoveis@gmail.com";
  $assunto = "Contato pelo Site";

  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  header('Location: index.html');
  
  echo "<meta http-equiv='refresh' content='10;URL=../Senauto/index.html'>";
?>