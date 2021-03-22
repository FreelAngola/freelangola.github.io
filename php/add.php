<?php
include_once("site.php"); 

$username = $log;
$body=$_POST['body'];
if(!empty($body)){$insere = "INSERT INTO postagens (username,conteudo,momento) Values ('$username','$body',now())";  
   $resultado = $mysqli_connection->query($insere); }
else{
   header('location:perfil.php');
}

?>
