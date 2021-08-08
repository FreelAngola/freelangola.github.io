<?php
session_start();
include("header.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre a Gokside</title>
    <link rel="icon" href="../img/icon.JPG" />
    <style>
        span {
            color: violet;
        }

        * {
            font-family: Century Gothic;
            font-size: 12pt;
            margin-top: 0;
            margin-left: 0;
            margin-right: 0;
        }

        a:hover {
            background: rgb(226, 205, 226);
        }

        #a_aj {
            text-decoration: none;
            color: white;
        }

        .foot {
            background-color: rgb(192, 124, 255);
            margin: 0%;
        }

        #post {
            opacity: .8;
            border-radius: 18px;
            border: 0.9px;
            border-color: violet;
        }

        a {
            text-decoration: none;
        }

        hr {
            opacity: .4;
        }

        #perf {
            color: rgb(192, 124, 255);
        }

        #aa {
            color: rgb(192, 124, 255);
        }

        #div {
            background-color: rgb(230, 230, 230);
        }

        #img {
            border-radius: 28px;
            border-color: violet;
            border: 0.9px;
        }

        #cont {
            width: 50px;
        }

        #sub {
            opacity: .8;
            margin-top: 15sp;
            padding: 15px;
            text-align: center;
            border-radius: 18px;
            border: 0.9px;
            border-color: rgb(224, 224, 224);
        }

        #pos {
            margin-top: 12px;
            margin-left: 5px;
        }

        #perf,
        #perfi,
        #s {
            margin-left: 10px;
        }

        img {
            width: 50%;
            height: 50%;
        }

        #img {
            width: 100%;
            height: 50%;
        }

        ul li {

            width: 50px;
            background-size: cover;
            float: left;
            height: 40px;
        }

        .sub_b {
            float: right;
            text-align: center;
            margin-left: 50px;
        }

        #php1 {
            color: black;
        }

        #s {
            font-size: 9px;
        }

        li {
            padding: 5px;
        }

        ul li {
            display: inline;
        }

        #im {
            width: 50px;
            height: 50px;
            border-radius: 34px;
            float: left;
            margin-left: 2px
        }

        #a_top {
            text-decoration: none;
            color: white;
            display: inline;
        }

        #fie1 {
            border-radius: 18px;
            border: 0.9px;
        }

        p {
            margin-left: 16px;
        }

        h1 {
            margin-left: 11px;
        }

        #a_fie_post {
            margin-left: 3px;
            text-decoration: none;
        }

        .sub_b {
            float: right;
            text-align: center;
            margin-left: 50px;
        }

        #fie2 {
            border-radius: 18px;
            border: 0.9px;
            margin-top: 0px;
            border-color: rgb(192, 124, 255);
            background-color: rgb(192, 124, 255);

        }

        #d {
            float: left;
            width: 100%;
        }
    </style>
</head>

<body>

    <body>
        <fieldset id="fie2">
            <center>
                <a id="a_top" href="site.php">Inicial | </a>
                <a id="a_top" href="perfil_gokside_2020.php">Perfil |</a>
                <a id="a_top" href="chatgoksidersonline.php">
                    Amigos Online
                    <?php $fu = $_SESSION['chat'];
                    if ($fu < 1) {
                        echo "";
                    }
                    if ($fu > 0) {
                        echo "(" . $fu . ")";
                    } ?>|
                </a>

                <a id="a_top" href="notificacao.php">
                    <strong>
                        Novidades
                        <?php $fuu = $_SESSION['noti'];
                        if ($fuu < 1) {
                            echo "";
                        }
                        if ($fuu > 0) {
                            echo "(" . $fuu . ")";
                        } ?>

                    </strong>|
                </a>

                <a id="a_top" href="mensagens.php">
                    <strong>
                        Conversas
                        <?php $consult = "SELECT DISTINCT mensageiro FROM msg ";
                        $resu = $mysqli_connection->query($consult);
                        $res = mysqli_num_rows($resu);
                        $rest = $res - 1;
                        echo "(" . $rest . ")";
                        ?>
                    </strong>|
                </a>

                <a id="a_top" href="pub_emprego.php">
                    <strong>
                        OLX
                        <?php $consultr = "SELECT * FROM empregos ";
                        $resur = $mysqli_connection->query($consultr);
                        $resr = mysqli_num_rows($resur);
                        echo "(" . $resr . ")";

                        ?>
                    </strong>|
                </a>
                <a id="a_top" href="../html/covid.html">Sobre a COVID-19 |</a>
                <a id="a_top" href="../html/jogos.html">Jogos |</a>
                <a id="a_top" href="menu.php">Menu </a>

            </center>
        </fieldset>
        <img src="../img/gokside.jpg" alt="goksiders" id="img">
        <p>
            Conheça as caras da gokside, um grupo formado por 5 estudantes angolanos (<span> João Afonso Katumbela, Gonçalo Gonçalves, Ladislau Pereira, Reis Victor, Manuel Ferrão</span>) 3X campeões das feiras de ciência, tecnologia e Inovação desde 2017, antes conhecidos como INOVATION 5 fazedores ou criadores de robôs mecatrônicos, porém possuem a sua própria social network.
        </p>
        <h1>conheça o perfil de cada um:</h1>
        <center><img src="../img/joao.jpg" alt=""></center>
        <h1><span>João Afonso Katombela</span></h1>
        <p>
            CEO e fundador da plataforma <a href="site.php">gokside</a>, chaveiro, professor e estudante de programação Web/Desktop/mobile. <br>
            <a href="https://free.facebook.com/joao.alfonso.562/"> Saiba mais no seu Facebook</a>
        </p>
        <br>
        <center><img src="../img/gm.png" alt=""></center>
        <h1><span>Gonçalo Goncalves</span></h1>
        <p>
            Co-fundador e Director executivo da plataforma <a href="site.php">gokside</a>, Informático e designer gráfico. <br><a href="https://free.facebook.com/gomes.bg.1/"> Saiba mais no seu Facebook</a>
        </p>

        <center><img src="../img/lau.png" alt=""></center>
        <h1><span>Ladislau Pereira</span></h1>
        <p>
            Colaborador da plataforma <a href="site.php">gokside</a>, designer, Informático, artista e empreendedor. <br><a href="https://free.facebook.com/ladislau.pereira.5/"> Saiba mais no seu Facebook</a>
        </p>

        <center><img src="../img/reis.jpg" alt=""></center>
        <h1><span>Reis Victor</span></h1>
        <p>Colaborador da plataforma <a href="site.php">gokside</a>, economista e estudante de programação Web. <br><a href="https://free.facebook.com/reisjosefeliciano.jose/"> Saiba mais no seu Facebook</a></p>

        <center><img src="../img/manuel.jpg" alt=""></center>
        <h1><span>Manuel Ferrão</span></h1>
        <p>
            Colaborador da plataforma <a href="site.php">gokside</a> e empreendedor. <br><a href="https://free.facebook.com/manibolang.datgs/"> Saiba mais no seu Facebook</a>
        </p>

    </body>

</html>