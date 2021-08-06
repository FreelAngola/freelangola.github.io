<?php
session_start();

$db_host = 'fdb22.awardspace.net'; //Should contain the "Database Host" value
$db_name = '3498505_cadastro'; //Should contain the "Database Name" value
$db_user = '3498505_cadastro'; //Should contain the "Database User" value
$db_pass = 'katumbela20'; //Should contain the "Database Password" value

$mysqli_connection = new MySQLi($db_host, $db_user, $db_pass, $db_name);
$uu = $_SESSION['pp'];
$consult = "SELECT nome FROM cadastrados WHERE pp='$uu'";
$resultadoo = $mysqli_connection->query($consult);
$dadoa = mysqli_fetch_array($resultadoo);

$u = $dadoa['nome'];
$target_dir = "uploads/";
$t = $_POST['legenda'];

$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (isset($_POST['submit'])) {
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    if ($imageFileType != "docx" && $imageFileType != "bat" && $imageFileType != "pdf" && $imageFileType != "java" && $imageFileType != "jar") {
        echo "File Format Not Suppoted";
    } else {
        $video_path = $_FILES['file']['name'];
        $sql = "INSERT INTO docs (usuario,documento,legenda, momento) values('$u','$video_path','$t',now())";
        $resultado = $mysqli_connection->query($sql);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        header("Location:documentos.php");
    }
}
