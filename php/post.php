<?php

session_start();

include_once('header.php');

$poster = $_SESSION['login'];
$id = $_SESSION['id'];
$post = $_POST['mensagem'];

if ($post == "") {
  echo "
    <!DOCTYPE html>
    <html lang='pt'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>

    <body>
    <script>
      window.alert('Por favor escreva algo no formulário!')
    </script>
    </body>
    </html>";

  header('location:painel.php');
} else {
  $sql = "INSERT INTO postagens (poster, poster_id, post, momento) VALUES('$poster','$id','$post', now())";
  $insert = mysqli_query($mysqli_connection, $sql);
  header('location:painel.php');
}
