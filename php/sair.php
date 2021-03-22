<?php
session_start();
include_once("header.php");
?>

<?php

$online2 =  "UPDATE cadastrados SET online = '0' WHERE pp = '".$_SESSION['pp']."' AND telefone= '".$_SESSION['telefone']."'";
$set=$mysqli_connection->query($online2);
session_destroy();


?>
