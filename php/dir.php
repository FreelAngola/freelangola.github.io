<?php
session_start();
include_once('header.php');
   ?>
   <?php
   if((!isset($_SESSION['telefone'])== true) || (!isset ($_SESSION['pass'])==true)){
           unset($_SESSION['telefone']);
       unset( $_SESSION['pp']);
       
      
       
       }
       $a=$_SESSION['pass'];
       $_SESSION["passe"]=$a;
    
       $consulta = "SELECT * FROM cadastrados WHERE pass='$a'"; 
   $resultado =  $mysqli_connection->query($consulta ); 
   $dado = mysqli_fetch_array($resultado);  
      $log= $dado['nome'];
       ?>
<?php
$username = $_SESSION['login'];
$a=$_POST['msg'];
$insere = "INSERT INTO criticas (usuario,mensagem,momento) VALUES ('$username','$a',now())";  
if($a==""){echo " Por favor escreva alguma coisa no formulário!";}
else{
$resultado = $mysqli_connection->query($insere);}?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tecnologia, inovação, i5, katumbela,facebook, video, partilhar,aplicativos, app, apk, fotos, joao, gm, joaf, joao, robotica, projectos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mensagem</title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="icon" type="img/blogs-for-freelancers.png" href="img/blogs-for-freelancers.png"/>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="materialize/css/materialize.css">

<link rel="stylesheet" href="materialize/css/materialize.min.css">

    <link rel="stylesheet" href="js/bootstrap.min.js">
    
</head>
<style>
    
</style>
<body class="container">


<nav  class="navbar navbar-expand-lg navbar-light bg-light ">
   
   <a href="perfilfreela.php"><button class="btn btn-outline-primary"><?=$log?>  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
              <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
            </svg></button></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"><spam class="navbar-toggler-icon"></spam></button>
<div class="collapse navbar-collapse" id="navbarSite">
<ul class="navbar-nav">
    <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
    <li class="nav-item"><a href="correio.php" class="nav-link">correio</a></li>
    <li class="nav-item"><a href="termosdeuso.php" class="nav-link">Termos de uso e regulamentos</a></li>
    <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
    <li class="nav-item"><a href="iniciarsessao.html" class="nav-link">logout</a></li>
</ul>
</div>
</nav>
<br>
 <br>   <p>carissimo/a ilustre <i> <?php echo $username;?> </i>obrigado por enviar sua mensagem responderemos o mais breve possivel</p>
<center><button><a href="painel.php" class="btn btn-outline-secondary">voltar a pagina inicial</a></button></center>
</body>
</html>