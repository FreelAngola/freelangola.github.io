<?php
session_start();
include("header.php");
?>
<?php

$post_id=$_SESSION["id_do_post"];
$post_i=$_POST['postid'];
$coment_name=$_POST['nome'];
$coment=$_POST['coment'];
$inserir ="INSERT INTO comentarios (use_name,comentario,datas,post_id) VALUES ('$coment_name','$coment',now(),'$post_i')"or die ("Falha ao criar conta");

$resultado = $mysqli_connection->query($inserir);
header("location:comentar.php?post_id=$post_id");
 ?>