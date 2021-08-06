<?php
session_start();
include_once("header.php");

$username = $_SESSION['login'];
$id = $_SESSION['id'];
$userid = $_SESSION['id'];
$user = $_POST['code'];
$msg = $_POST['body'];
$code = $id + $user;

if (empty($msg)) {
   echo "<h1>por favor escreva alguma coisa!</h1>";
} else {
   $insere = "INSERT INTO msg (mensageiro,mensagem,codigo,sessao, momento) Values ('$username','$msg','$code','$userid',now())";
   $resultado = $mysqli_connection->query($insere);

   header("Location:mensagem.php?iduser=$user");
}
