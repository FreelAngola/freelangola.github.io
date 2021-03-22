<?php
session_start();
include_once("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musicas</title>
      <link rel="icon" href="icon.JPG"/>
</head>
<style>
  *{
        font-family: Century Gothic;
        font-size:12pt;
        margin:0;
    }
  #post{
       opacity: .8;
       border-radius: 18px;
       border-color: violet;
      
       border: 0.9px;
       border-color: aqua;
   }
   #sm{
    font-size:7pt;
    margin-left:0%;
   }
   h2{
   
   color:rgb(192, 124, 255);}
   #a_aj{
    text-decoration: none;
    color:white;
  }
  .foot{
    background-color: rgb(192, 124, 255); 
    margin:0%;
  }
    .sub_b{
      float:right;
      text-align:center;
      margin-left:50px;
  }   
  #a_top{
    text-decoration: none;
    color:white;
  }
  #fie2{
    border-radius: 18px;
        border-color: rgb(192, 124, 255);
        border: 0.9px;
    background-color: rgb(192, 124, 255);

    }
    #fie1{
    border-radius: 18px;
    border: 0.9px;
  }
    #sub{
    opacity: .8;
    margin-top: 15sp;
    padding:  15px;
    border: 0.9px;
    text-align: center;
    border-radius: 18px;
    border-color: rgb(224, 224, 224);
    }
</style>
<body>
  

       
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

 </center></fieldset>
        </fieldset>
        
              
              
<fieldset id="fie1">
            <form action="pmusics.php" method="post" enctype="multipart/form-data">
             <textarea name="legenda" id="" cols="20" rows="2" placeholder="legenda"></textarea><br>
        <input type="file" name="file" id="post"><div class="sub_b"><input type="submit" name="submit" value="postar" id="post"></div>
       </form></fieldset>
     <p id="php1">
     <center><p> <h2>Musicas</h2></center></p>
     
      <?php
      
      include("header.php");
       
     $fetchVideos = mysqli_query($mysqli_connection , "SELECT * FROM musicas");
     while($row = mysqli_fetch_assoc($fetchVideos)){
     
       $location = $row['musica'];
       
       $fetchVideo = mysqli_query($mysqli_connection , "SELECT * FROM musicas WHERE musica='$location'");
$rows = mysqli_fetch_array($fetchVideo);
 
       echo "<hr>";
       echo "<h2>".$rows['usuario']."</h2>";
       $location->usuario;
         echo " ".$rows['legenda']."<br>";
       echo "<audio controls><source src='uploads/".$location."' controls loop autoplay></audio><br>";

       echo"<hr>";
     }
     ?>
      </center>
      <hr>
    <div class="foot">
     </div>
</body>
</html>