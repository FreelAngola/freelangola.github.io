<?php
session_start();
include_once('header.php');
   ?>
   <?php

$user= $_SESSION['login'];
$msg= $_POST['texto'];
$code= $_GET['user_id'];
$meu_id= $_SESSION['id'];
$codigo="$code e $meu_id";
$sql="INSERT INTO msg (code,  eu  ,msg, seu_id,   momento) VALUES('$codigo','$user', '$msg', $code,  now())";
$insert=mysqli_query($mysqli_connection,$sql);
header("location:mensagens.php?usernumer=$code");
?>

  