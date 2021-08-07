<?php

session_start();
include('header.php');

$user = $_GET['talkingwith'];
$u = $_SESSION['login'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (isset($_POST['submit'])) {
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    if ($imageFileType != "docx" && $imageFileType != "bat" && $imageFileType != "pdf" && $imageFileType != "java" && $imageFileType != "html" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "zip" && $imageFileType != "js" && $imageFileType != "php" && $imageFileType != "wav" && $imageFileType != "mp4" && $imageFileType != "mp3") {
        echo "File Format Not Suppoted";
    } else {
        $video_path = $_FILES['file']['name'];
        $sql = "INSERT INTO docs (arquivo, usuario, momento) values('$video_path','$u',now())";
        $resultado = $mysqli_connection->query($sql);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        header("Location:mensagens.php?usernumer=$user");
    }
}
