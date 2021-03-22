<?php
session_start();
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Produto/Artigo</title>
    <link rel="icon" href="icon.JPG"/>
</head>

<style>


*{
            font-family: Century Gothic;
            font-size:12pt;
            margin:2px;
        }
        #pos{

            opacity: .8;
      
       border-radius: 18px;
       
       border-color: violet;

        }
         #post{
       opacity: .8;
       float:right;
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
                 
<a id="a_top" href="chatgoksidersonline.php">Novidades <?php $fuu=$_SESSION['noti']; if($fuu<1){echo"";}                  
                 if($fuu>0){echo"(".$fuu.")";}?>  |</a>
     <a id="a_top" href="pub_emprego.php">OLX    |</a>
<a id="a_top" href="covid.html">Sobre a COVID-19  |</a>
 <a id="a_top" href="jogos.html">Jogos    |</a> 
  <a id="a_top" href="menu.html">Menu   </a> 

     </center></fieldset>

     <fieldset id="fie2">
        <form action="emp.php" method="post" enctype="multipart/form-data" >
           <center><p>O que Vendes ? <img src="img/card.png" width='10px' height='10px'></p></center> 
          Produto: <textarea name="tipo" id="post" cols="10" rows="1"  ></textarea><br><br>
                Preço:   <textarea name="onde" id="post" cols="10" rows="1" ></textarea><br><br>
                Localização: <textarea name="nome" id="post" cols="10" rows="1"  ></textarea> <br><br>
                
                <select name="pay" id="pos">
                    <option value="">Selecione um método de pagamento <img src='img/card.png' width='10px' height='10px'></option>
                    <option value="Paypal">Paypal</option>
                    <option value="Transferência Bancária">Transferência Bancária</option>
                    <option value="Presencial">Presencial</option>
                </select>
                <br> <center><input type="submit" class="sub_b" value="Publicitar"></center>
            </form></fieldset>
</body>
</html>