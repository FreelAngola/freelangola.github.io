<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar conta</title>
  <link rel="icon" href="img/blogs-for-freelancers.png" />
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/materialize/materialize.min.css">
</head>

<body>
  <?php
  include('header.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $provincia = $_POST['provincia'];
  $municipio =  $_POST['municipio'];
  $tel = $_POST['tel'];
  $hobbies = $_POST['habilidades'];

  $sql = "INSERT INTO cadastrados (nome,email,pass,provincia,municipio,tel,habilidades, momento) VALUES('$nome','$email','$pass','$provincia','$municipio','$tel','$hobbies', now())";
  $insert = $mysqli_connection->query($sql);

  if ($insert) {
    echo "Sua conta foi criada, <a href='iniciarsessao.html'>inicie sessão para continuar..</a>";
  } else {
    echo "Ocorreu um Erro ao criar sua conta, <a href='CriarConta.html'>tente novamente</a> .";
  }
  ?>
</body>

</html>