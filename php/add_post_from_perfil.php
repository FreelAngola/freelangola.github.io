<?php 
session_start();
include_once("header.php"); 

$username = $_SESSION['nome']; 
$body=$_POST['body'];
$insere = "INSERT into postagens (username, conteudo, momento) Values ('$username', '$body', now())";  
$result = mysqli_query($conexao, $insere); 

header("Location:perfil.php");
