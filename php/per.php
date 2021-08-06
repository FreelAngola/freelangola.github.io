<?php
session_start(); 

$db_host = 'fdb22.awardspace.net'; //Should contain the "Database Host" value
$db_name = '3498505_cadastro'; //Should contain the "Database Name" value
$db_user = '3498505_cadastro'; //Should contain the "Database User" value
$db_pass = 'katumbela20'; //Should contain the "Database Password" value

$mysqli_connection = new MySQLi($db_host, $db_user, $db_pass, $db_name);
$uu = $_SESSION['pp'];
$consult = "SELECT id FROM cadastrados WHERE pp='$uu'";
$resultadoo = $mysqli_connection->query($consult);
$dadoa = mysqli_fetch_array($resultadoo);

$u = $dadoa['id'];
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (isset($_POST['submit'])) {
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    if ($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "File Format Not Suppoted";
    } else {
        $video_path = $_FILES['file']['name'];

        $sql = "INSERT INTO perfil_fotos (usuario_id,foto, momento) VALUES('$u','$video_path',now())";
        $resultado = $mysqli_connection->query($sql);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

        header("Location:perfil_gokside_2020.php");
    }
}
