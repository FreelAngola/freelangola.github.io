<?php
session_start();
include_once('header.php');

if ((!isset($_SESSION['telefone']) == true) || (!isset($_SESSION['pass']) == true)) {
    unset($_SESSION['telefone']);
    unset($_SESSION['pp']);
}
?>

<!doctype html>
<html class="no-js" lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/educate-custon-icon.css">
    <link rel="stylesheet" href="../css/morrisjs/morris.css">
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<style>
    @media screen and (min-width:992px) {

        /* Assign multiple styles in here for screens larger than 991px */
        #element-1 {
            font-size: 10px;
        }

        .klass-1 {
            font-size: 20px;
        }
    }

    .titulo {
        margin: 0;
    }

    #svg {
        float: left;

    }
</style>

<body>
    <h1 class="titulo">
        <center>
            <a href="painel.php">
                <svg id="svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg>
            </a>
            Encontre Freelancers e Jobs
        </center>
    </h1>

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Pesquise freelancers..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    $consulta = "SELECT * FROM cadastrados";
    $resultado =  $mysqli_connection->query($consulta);
    while ($dado = mysqli_fetch_array($resultado)) {
        $log = $dado['nome'];
        $provincia = $dado['provincia'];
        $municipio = $dado['municipio'];
        $habilidades = $dado['habilidades'];
        $email = $dado['email'];
        $tel = $dado['tel'];
        $id = $dado['id'];

    ?>

        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                                <div class="social-media-in">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <img alt="logo" width="30%" heigh="30%" class="img-circle m-b" src="img/blogs-for-freelancers.png">
                                <h3><a href=""><?= $log ?></a></h3>
                                <p class="all-pro-ad"><?php echo $provincia . "," . $municipio ?></p>
                                <p><?= $habilidades ?></p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat">
                                            <span>Star: </span><strong>0</strong>
                                        </div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat">
                                            <span>Críticas: </span>
                                            <strong>0</strong>
                                        </div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat">
                                            <span>Feitos: </span>
                                            <strong>0</strong>
                                        </div>
                                    </div>
                                    <button class="btn btn-md btn-success">
                                        <a href="perfil.php?usuarionumb=<?= $id ?>">Contratar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>