<?php
session_start();
include("header.php");


$post = $_GET['post'];
$id = $_SESSION['id'];

$inserir =  "INSERT INTO likes (post_id,likes,liker) VALUES ('$post',1,'$id')";
$resultados = $mysqli_connection->query($inserir);

header("location:site.php");
