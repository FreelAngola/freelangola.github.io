<?php
session_start();
include_once('header.php');

$poster = $_SESSION['login'];
$post = $_GET['postnumb'];

$sql = "INSERT INTO gostos (liker, likes, post) VALUES('$poster',' 1 ','$post')";
$insert = mysqli_query($mysqli_connection, $sql);

header('location:painel.php');
