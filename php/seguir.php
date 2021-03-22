<?php
session_start();
include("header.php");
?>
<?php
$id=$_SESSION['id'];
$f_id=$_POST['seguir'];
$inserir =  "INSERT INTO seguidores (seguindo_id,seguidor_id) VALUES ('$f_id','$id')";
$resultado = $mysqli_connection->query($inserir);

header("location:perfil.php?gokside_profile_id=$f_id");

 ?>