<?php
session_start();
include("header.php");
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
      $id= $dado['id'];
      $_SESSION['login']=$log;
      $_SESSION['id']=$id;
   
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel de controle</title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
   
    <link rel="icon" type="img/blogs-for-freelancers.png" href="img/blogs-for-freelancers.png"/>

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>
<style>
    .sp{
      font-size: 8pt;
      color:blueviolet;
      margin-top:0;
    }
.mideas{
  font-size:10pt;
  margin-top:0;
  }

#mom{
  font-size:8pt;
}
  .foott{
  background-color: rgb(136, 227, 255);
  }
   
   .spa{
    font-size:15pt;
   }
#texto{
  margin-top: 0;
    font-size:15pt;
  opacity:.4;
  text-align:center;
   color: rgb(252, 151, 255);
}
    #svg2{
        margin-top:7px;
        color:gray;
    }
    .span{
        font-size:8pt;
        margin-top:0;
        font-family:Century Ghotic;
        color:green;
    }
  #svga{
width: 30px;
height: 30px;
margin-right: 5px;
  }
    strong{
        color:blueviolet;
        font-size:14pt
    }
     #po{
      width:90%;
    }
    .td{
        margin-left:5px;
    }
    #bom{
        color:green;
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
    <li class="nav-item"><a href="dashboard.php" class="nav-link">Free Jobs</a></li>
  <li class="nav-item"><a href="conversas.php" class="nav-link">Correio 
</a></li>
    <li class="nav-item"><a href="termosdeuso.php" class="nav-link">Termos de uso e regulamentos</a></li>
    <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
    <li class="nav-item"><a href="iniciarsessao.html" class="nav-link">logout</a></li>
</ul>
</div>
</nav>

<fieldset>

<div class="container-fluid">
    <form class="d-flex" action="post.php" method="post">
      <input class="form-control me-2" name="mensagem" type="text" placeholder="Do que precisas?" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Publicar</button>
    </form>
  </div>
</fieldset>

<h2  id="texto" class="text-success">Postagens de experiências e Jobs </h2>
<center><span class="span">Verifique seu Correio</span></center>
  
  <hr>
<?php

$conPost = "SELECT * FROM postagens ORDER BY id DESC"; 
   $results =  $mysqli_connection->query($conPost); 
   while($dados = mysqli_fetch_array($results)){  
      $postador= $dados['poster'];
      $oPost= $dados['post'];
      $postId= $dados['id'];
      $poster_id= $dados['poster_id'];
      $momento= $dados['momento'];

?>

<div class="card-panel">

<h3 class="left-align" id="po"><a href="perfil.php?usuarionumb=<?=$poster_id?>"> <?php if ($postador=="Gokside"){ echo $postador." <svg id='bom' width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-check2-circle' fill='currentColor' xmlns=' http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z'/>
  <path fill-rule='evenodd' d='M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z'/>
</svg>"; } else { echo $postador; }?></a></h3>
<p id="po" class="left-align"><span class="h6"><?=$oPost?></span></p>
<span id="mom" class="right-align" ><?php echo "Em ".$momento;?> </span> <!-- <span class="spa">  <a class="right-align" href="gostar.php?postnumb=<?=$postId?>">curtir</a></span> -->
</div><hr><?php }?>

<div class="foott">
<center><h3 class="mideas">Mídeas @Angofreela</h3><h3 class="mideas">Todos os Direitos Reservados. @Gokside2021</h3></center>

<footer>
  <center class="mideas"><a href="https://free.facebook.com/joao.afonso.9279807"><svg id="svga" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a><a href="#"><svg id="svga" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a><a href="#"><svg id="svga" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a><a href="#"><svg id="svga" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm169.5 338.9c-3.5 8.1-18.1 14-44.8 18.2-1.4 1.9-2.5 9.8-4.3 15.9-1.1 3.7-3.7 5.9-8.1 5.9h-.2c-6.2 0-12.8-2.9-25.8-2.9-17.6 0-23.7 4-37.4 13.7-14.5 10.3-28.4 19.1-49.2 18.2-21 1.6-38.6-11.2-48.5-18.2-13.8-9.7-19.8-13.7-37.4-13.7-12.5 0-20.4 3.1-25.8 3.1-5.4 0-7.5-3.3-8.3-6-1.8-6.1-2.9-14.1-4.3-16-13.8-2.1-44.8-7.5-45.5-21.4-.2-3.6 2.3-6.8 5.9-7.4 46.3-7.6 67.1-55.1 68-57.1 0-.1.1-.2.2-.3 2.5-5 3-9.2 1.6-12.5-3.4-7.9-17.9-10.7-24-13.2-15.8-6.2-18-13.4-17-18.3 1.6-8.5 14.4-13.8 21.9-10.3 5.9 2.8 11.2 4.2 15.7 4.2 3.3 0 5.5-.8 6.6-1.4-1.4-23.9-4.7-58 3.8-77.1C183.1 100 230.7 96 244.7 96c.6 0 6.1-.1 6.7-.1 34.7 0 68 17.8 84.3 54.3 8.5 19.1 5.2 53.1 3.8 77.1 1.1.6 2.9 1.3 5.7 1.4 4.3-.2 9.2-1.6 14.7-4.2 4-1.9 9.6-1.6 13.6 0 6.3 2.3 10.3 6.8 10.4 11.9.1 6.5-5.7 12.1-17.2 16.6-1.4.6-3.1 1.1-4.9 1.7-6.5 2.1-16.4 5.2-19 11.5-1.4 3.3-.8 7.5 1.6 12.5.1.1.1.2.2.3.9 2 21.7 49.5 68 57.1 4 1 7.1 5.5 4.9 10.8z"/></svg></a></center>
</footer></div>
</body>
</html>