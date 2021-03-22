<?php
include('header.php');

$nome=$_POST['nome'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$provincia=$_POST['provincia'];
$municipio=  $_POST['municipio'];
$tel=$_POST['tel'];
$hobbies=$_POST['habilidades'];
$sql="INSERT INTO cadastrados (nome,email,pass,provincia,municipio,tel,habilidades, momento) VALUES('$nome','$email','$pass','$provincia','$municipio','$tel','$hobbies', now())";
$insert=$mysqli_connection->query($sql);
if($insert){
?>
  
  
  
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar conta</title>
  
  <script src="materialize/js/materialize.min.js"></script>
    <link rel="icon" type="img/blogs-for-freelancers.png" href="img/blogs-for-freelancers.png"/>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="materialize/css/materialize.css">

<link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>
<body>
  <?php
    echo"Sua conta foi criada, <a href='iniciarsessao.html'> inicie sessão</a>";
}
else{
    echo"Ocorreu um Erro ao criar sua conta !  <a href='CriarConta.html'>  tente novamente</a> .";
}

  ?>
</body>
</html>