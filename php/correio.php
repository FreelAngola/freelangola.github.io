<?php
session_start();
include("header.php");

if ((!isset($_SESSION['telefone']) == true) || (!isset($_SESSION['pass']) == true)) {
    unset($_SESSION['telefone']);
    unset($_SESSION['pp']);
}
$a = $_SESSION['pass'];
$_SESSION["passe"] = $a;
$consulta = "SELECT * FROM cadastrados WHERE pass='$a'";
$resultado =  $mysqli_connection->query($consulta);
$dado = mysqli_fetch_array($resultado);
$log = $dado['nome'];
$id = $dado['id'];
$_SESSION['login'] = $log;
$_SESSION['id'] = $id;
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InBox - correio</title>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="icon" type="../img/blogs-for-freelancers.png" href="../img/blogs-for-freelancers.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <style>
        #hh {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <span id="hh" class="span">Caixa de Correio</span>
    </nav>
    <div class="tabbable">
        <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
            <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <p>I'm in Section 1.</p>
            </div>
            <div class="tab-pane" id="tab2">
                <p>Howdy, I'm in Section 2.</p>
            </div>
        </div>
    </div>
    <div class="tabbable tabs-below">
        <div class="tab-content">
        </div>
        <ul class="nav nav-tabs">
        </ul>
    </div>
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
        </ul>
        <div class="tab-content">
        </div>
    </div>
</body>

</html>