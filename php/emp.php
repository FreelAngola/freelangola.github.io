<?php 
session_start();
include_once("header.php"); ?>
<?php

$username = $_SESSION['login']; 
$tipo=$_POST['tipo'];//produto
$onde=$_POST['onde'];//preço
$body=$_POST['nome'];//localização
$pay=$_POST['pay'];
if($onde==""){
    echo "prencha todos os campos por favor";
}
else{
$insere = "INSERT INTO empregos (usuario,tipo_de_emprego,descricao,momento,onde, pagamento) Values ('$username','$tipo','$body',now(),'$onde', '$pay')";  
   $resultado = $mysqli_connection->query($insere);  
 header("Location:pub_emprego.php");
 }
?>
