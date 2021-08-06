<?php
session_start();
include_once('header.php');

if ((!isset($_SESSION['telefone']) == true) || (!isset($_SESSION['pass']) == true)) {
    unset($_SESSION['telefone']);
    unset($_SESSION['pp']);
}

$user = $_GET['usernumer'];
$consulta = "SELECT * FROM cadastrados WHERE id='$user'";
$resultado =  $mysqli_connection->query($consulta);
$dado = mysqli_fetch_array($resultado);
$log = $dado['nome'];
$id = $dado['id'];
$meu_id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $log ?></title>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <link rel="icon" href="../img/blogs-for-freelancers.png" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <style>
        .img {
            border-radius: 20px;
        }

        .arcs {
            opacity: .4;
        }

        #msg {
            margin-left: 20px;
            width: 50%;
        }
    </style>
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a href="perfilfreela.php">
            <button class="btn btn-outline-primary">
                <?php echo "Para: " . $log ?>
                <img src="gokside.JPG" width="20em" height="20em" class="img" alt="">
            </button>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <spam class="navbar-toggler-icon"></spam>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="painel.php" class="nav-link">
                        Pagina Inicial
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- mensagens e formularios -->
    <div class="card-body bg-secondary rounded" style="height: 240px;overflow-y: auto;" id="card-body">
        <div class="row">
            <div class="col">
                <?php
                $sId = $_SESSION['id'];
                $codigo1 = "$user e $meu_id";
                $codigo2 = "$meu_id e $user";
                $tirar = "SELECT * FROM msg WHERE code='$codigo1' OR code='$codigo2' ORDER BY id DESC";
                $selec = mysqli_query($mysqli_connection, $tirar);
                while ($dados = mysqli_fetch_array($selec)) {

                    $eu = $dados['eu'];
                    $mssg = $dados['msg'];
                    $momento = $dados['momento'];
                    $sessao = $_SESSION['login'];


                    echo "	<span class='badge badge-primary  rounded-50 px-3 py-2' style='font-size: 16px'>" . $mssg . "</span>";
                    echo  "	<small class='d-block text-light'>" . $eu . " - " . $momento . "</small>";
                } ?>
            </div>
        </div>
    </div>

    <div class="card-footer bg-transparent">
        <div class="row">
            <div class="col-9">
                <form action="sms.php?user_id=<?= $user ?>" method="post">
                    <input type="text" name="texto" id="txtMessage" class="form-control rounded-50 box-shadow border-0 px-4" placeholder="Type a messsage...">
                    <button type="Submit" class="btn btn-primary box-shadow border-0">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <form action="postimage.php?talkingwith=<?= $user ?>" enctype="multipart/form-data" method="post">
        <center>
            <p class="arcs">Ficheiros suportados: docx, pdf, image, mp3, mp4, html, php, zip, js.</p>
        </center>
        <div class="input-group">
            <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" name="submit" type="submit" id="inputGroupFileAddon04">enviar</button>
        </div>
    </form>
    <!-- Coloca o scroll bar no final mostrando as ultimas mensanges enviadas -->
    <script type="text/javascript">
        function scrollToBottom(el) {
            return el.scrollTop = el.scrollHeight;
        }
        scrollToBottom(document.getElementById('card-body'));
    </script>
</body>

</html>