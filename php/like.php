<?php
session_start();
include("header.php");
?>
<?php
$post=$_GET['post'];
$id=$_SESSION['id'];
 $inserira =  "INSERT INTO likes (post_id,likes,liker) VALUES ('$post',1,'$id')";
 $resultadoa = $mysqli_connection->query($inserira);
 
 header("location:site.php");

?>