<?php
 session_start();
 include("header.php");
   ?>
<?php
   
    $a=$_SESSION['pp'];
    $_SESSION["passe"]=$a;
   include("header.php");
    $consulta = "SELECT * FROM cadastrados WHERE pp='$a'"; 
$resultado =  $mysqli_connection->query($consulta ); 
$dado = mysqli_fetch_array($resultado);  
   $log= $dado['nome'];
   $_SESSION['id']=$dado['id'];
  
    ?>
<DOCTYPE html>
<html>
<head>
    
    <title> <?php 
            $receptor=$_GET['iduser'];

$consultai = "SELECT * FROM cadastrados where id='$receptor' "; 
$resultadoi = $mysqli_connection->query($consultai);  
$dadosi = mysqli_fetch_array($resultadoi);

echo $dadosi['nome'];



?></title>
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
        margin:0;
    }
    #a_aj{
    text-decoration: none;
    color:white;
}
.foot{
    background-color: rgb(192, 124, 255); 
  margin:0%;
}
     #post{
       opacity: .8;
       border-radius: 18px;
       border: 0.9px;
       border-color: violet;
   }
  a{
  text-decoration: none;}
   hr{
    opacity: .4;
   }
     #perf{
       color:rgb(192, 124, 255);
   }
   #aa{
    color:rgb(192, 124, 255);
   }
   #sms{
   color:rgb(192, 124, 255);
   
   }
   
   #div{
    background-color: rgb(230, 230, 230);
   }
   #img{
    border-radius: 28px;
    border-color: violet;
    border: 0.9px;
   }
   #sub{
    opacity: .8;
    margin-top: 15sp;
    padding:  15px;
    text-align: center;
       border-radius: 18px;
      border: 0.9px;
       border-color: rgb(224, 224, 224);
   }
    ul li{
     
   width: 50px;
   background-size: cover;
   float: left;
   height: 40px;
   }
   .sub_b{
      float:right;
      text-align:center;
      margin-left:50px;
  }   
   #php1{
       color: black;
   }
   #sms, #ss{
   margin-left:10px;
   }
   #s{
   font-size: 7px;}
li{
    padding:5px;
}
  ul li {
      display:inline;
   }
   
   #a_top{
    text-decoration: none;
    color:white;
  }
  #fie1{
    border-radius: 18px;
    border: 0.9px;
  }
  #a_fie_post{
      margin-left:3px;
    text-decoration: none;
  }
  .sub_b{
      float:right;
      text-align:center;
      margin-left:50px;
  }
   #fie2{
    border-radius: 18px;
    border:0.9px;
       border-color: rgb(192, 124, 255);
    background-color: rgb(192, 124, 255);

   }</style>
<body>
  

        <hr>
        
			<fieldset id="fie2">
		
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
<a id="a_top" href="covid.html">Sobre a COVID-19  |</a>
<a id="a_top" href="jogos.html">Jogos    |</a> 
<a id="a_top" href="menu.php">Menu   </a> 

 </center>
			</fieldset>
			<?php 
            $receptor=$_GET['iduser'];

$consulta = "SELECT * FROM cadastrados where id='$receptor' "; 
$resultado = $mysqli_connection->query($consulta);  
while ($dados = mysqli_fetch_array($resultado)){  
$user=$dados['id'];
echo "<h1>- <a href='perfil.php?gokside_profile_id=$user'>".$dados['nome']."</a> - Mensagens</h1><hr>";

}

?>


<?php 

$id=$_SESSION['id'];
$code=$id+$receptor;
$consultam = "SELECT * FROM msg WHERE codigo='$code' ORDER BY id ASC"; 
$resultadom = $mysqli_connection->query($consultam);  
while ($dadosm = mysqli_fetch_array($resultadom)){  
$userm=$dadosm['id'];
echo "<br><br><a href='perfil.php?gokside_profile_id=$receptor' id='sms'>".$dadosm['mensageiro']."</a>";
echo "<br><span id='ss'>".$dadosm['mensagem']."</span>";

}
?>


<hr>
<fieldset id="fie1">
            <form action="msgs.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="code" value="<?=$receptor?>">
        <textarea name="body" cols="20" rows="2" id="posto" placeholder="esccreva uma mensagem"></textarea> <input type="submit" value="Enviar" id="post">
        </form>
  
<p><h2>
</body>
</html>