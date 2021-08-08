<?php
session_start();
include("header.php");

$post_id = $_POST['postid'];
$coment_name = $_POST['nome'];
$coment = $_POST['coment'];
$inserir =  "INSERT INTO comentarios (use_name,comentario,datas,post_id) VALUES ('$coment_name','$coment',now(),'$post_id')";
$resultado = $mysqli_connection->query($inserir);

header("location:site.php");
