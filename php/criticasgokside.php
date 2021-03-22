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


<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title>Mensagem para AngoFreela</title>
 <link rel="icon" href="icon.JPG"/>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
   
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tecnologia, inovação, i5, katumbela,facebook, video, partilhar,aplicativos, app, apk, fotos, joao, gm, joaf, joao, robotica, projectos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        *{
            font-family: Century Gothic;
            font-family:12pt;
            margin-left:0;
            margin-right:0;
        }
         #post{
       opacity: .8;
       border-radius: 18px;
       border-color: violet;
   }
   #fie3{
    border-radius: 18px;
       border-color: rgb(192, 124, 255);
    }
    
     #a_top{
        text-decoration: none;
        color:white;
        display:inline;
      }

      #fie2{
        border-radius: 18px;
        border:0.9px;
        margin-top:0px;
           border-color: rgb(192, 124, 255);
        background-color: rgb(192, 124, 255);
    
       }
   .sub_b{
      float:right;
      text-align:center;
      margin-left:50px;
      opacity: .8;
       border-radius: 18px;
       border-color: violet;
  }  
    </style>
    <body class="container">
        
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light ">
   
   <a href="perfilfreela.php"><button class="btn btn-outline-primary">  <?=$log?>  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
         <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
         <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
         <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
       </svg> </button>
</a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"><spam class="navbar-toggler-icon"></spam></button>
<div class="collapse navbar-collapse" id="navbarSite">
<ul class="navbar-nav">
<li class="nav-item"><a href="painel.php" class="nav-link">Painel</a></li>
<li class="nav-item"><a href="dashboard.php" class="nav-link">Free Jobs</a></li>
<li class="nav-item"><a href="chat.php" class="nav-link">Correio 
</a></li>
<li class="nav-item"><a href="termosdeuso.php" class="nav-link">Termos de uso e regulamentos</a></li>
<li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
<li class="nav-item"><a href="iniciarsessao.html" class="nav-link">logout</a></li>
</ul>
</div>
</nav>
    <fieldset id="fie3">
    <form action="dir.php" method="post" enctype="multipart/form-data" >
       <center><p>escreva sua mensagem aqui</p></center> 
             <textarea name="msg" id="post" cols="30" rows="2" placeholder="escreva sua mensagem aqui"></textarea> <input type="submit" class="sub_b" value="Enviar">
        </form></fieldset><hr></body>
    </html>