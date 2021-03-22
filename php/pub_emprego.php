<?php
session_start();
include_once("header.php");
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>direção gokside</title>
        <link rel="icon" href="icon.JPG"/>
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
            font-size:12pt;
            margin:2px;
        }
         #post{
       opacity: .8;
       border-radius: 18px;
       
       border-color: violet;
   }
   h2{
   color: violet;
   }
   #a_top{
    text-decoration: none;
    color:white;
  }
   #fie2{
    border-radius: 18px;
      border: 0.9px;
       border-color: rgb(192, 124, 255);
    }
   .sub_b{
      text-align:center;
      margin-left:50px;
      opacity: .8;
        border: 0.9px;
       border-radius: 18px;
       border-color: violet;
  }  
  a{
  text-decoration:none;}
  
      #fie3{
        border-radius: 18px;
        border:0.9px;
        margin-top:0px;
           border-color: rgb(192, 124, 255);
        background-color: rgb(192, 124, 255);
    
       }
    </style>
    <body>
      
<fieldset id="fie3">
			
            <center><a id="a_top" href="site.php">Inicial   |  </a>
 
             <a id="a_top" href="perfil_gokside_2020.php">Perfil     |</a> 
                         <a id="a_top" href="chatgoksidersonline.php">Amigos Online <?php $fu=$_SESSION['chat']; if($fu<1){echo"";}                  
                         if($fu>0){echo"(".$fu.")";}?>  
                         
                         |</a> 
                         
                         <a id="a_top" href="notificacao.php"><strong>Novidades <?php $fuu=$_SESSION['noti']; if($fuu<1){echo"";}                  
                         if($fuu>0){echo"(".$fuu.")";}?>  
                         
                         </strong>|</a> 
                         
             <a id="a_top" href="mensagens.php" ><strong>Conversas <?php $consult = "SELECT DISTINCT mensageiro FROM msg "; 
$resu = $mysqli_connection->query($consult);
$res=mysqli_num_rows($resu);
echo "(".$res.")";

?>  </strong>|</a>


 <a id="a_top" href="pub_emprego.php"><strong>OLX    <?php $consultr = "SELECT * FROM empregos "; 
$resur = $mysqli_connection->query($consultr);
$resr=mysqli_num_rows($resur);
echo "(".$resr.")";

?>   </strong>|</a>
             <a id="a_top" href="pub_emprego.php">OLX    |</a>
     <a id="a_top" href="covid.html">Sobre a COVID-19  |</a>
         <a id="a_top" href="jogos.html">Jogos    |</a> 
          <a id="a_top" href="menu.html">Menu    </a> 
       
             </center></fieldset>
        
    <fieldset id="fie2">
    <a href="venderProdutoouartigos.php"><img src='img/produto.png' width='10px' height='10px'>Vender um produto/artigo</a>
    </fieldset>
    </body>
    <hr>
<center><h1>Disponíveis</h1></center>
<?php

$consulta = "SELECT * FROM empregos"; 
$resultado = $mysqli_connection->query($consulta);  
while ($dados = mysqli_fetch_array($resultado)){  
?><hr>
<p><h2><?= $dados['usuario']?></h2></p>
        <p><?php 
        
        echo "<a href='#'>".$dados['tipo_de_emprego']."</a><br><br>";
       
   
   echo "Preço: ".$dados['onde']."AOA<br>"; 
   echo "Localização: ".$dados['descricao']."<br>"; 
  
   echo"Forma de negociação Via ".$dados['pagamento'].""; 
   echo "<br><a href='#'><img src='img/emprego.png' width='10px' height='10px'> enviar mensagem</a>";
    }?></p><hr>
    </html>