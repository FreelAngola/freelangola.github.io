<?php
session_start();
include("header.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notificacões</title>
    <link rel="icon" href="../img/icon.JPG" />
    <style>
        * {
            margin: 0;
            font-family: Century Gothic;
        }

        body {
            margin: 0;
            background-color: rgb(240, 240, 240);
        }

        #jj {
            color: violet;
        }

        hr {

            margin: 0;
        }


        #a_top {
            text-decoration: none;
            color: white;
        }

        #fie2 {
            border-radius: 18px;
            border: 0.9px;
            border-color: rgb(192, 124, 255);
            background-color: rgb(192, 124, 255);

        }

        h1 {
            opacity: .5;
        }

        a {
            text-decoration: none;
            color: gray;
        }

        img {

            padding-top: 2px;
        }

        #field {
            margin-left: 10px;
            margin-right: 10px;
            background-color: white;
            border-radius: 15px;
            border: 0.9px;
        }

        a:hover {
            color: blueviolet;
        }
    </style>
</head>

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
            <a id="a_top" href="covid.html">Sobre a COVID-19 |</a>
            <a id="a_top" href="jogos.html">Jogos |</a>
            <a id="a_top" href="menu.php">Menu </a>

        </center>
    </fieldset>

    <fieldset id="field">
        <legend>
            <h1>Novidades</h1>
        </legend>

        <span>Publicações:</span>
        <?php

        $consult = "SELECT * FROM postagens ORDER BY id DESC";
        $set = $mysqli_connection->query($consult);
        while ($linhas = mysqli_fetch_array($set)) {
            $nomei = $linhas['username'];
            $id = $linhas['id'];
            $dia = $linhas['momento'];
            $nomess = $_SESSION['login'];
            echo "<hr>";

            if ($nomei == $nomess) {
                echo "";
            } else {
                echo "<a href='comentar.php?post_id=$id'><p><img src='img/alterou.png' width='10px' height='10px'><input type='hidden' value='$id'> <strong id='jj'>  $nomei</strong> postou uma publicação em ( $dia) </p></a>";
            }
        }
        echo "<br>";
        echo "Vídeos:";

        $consult = "SELECT * FROM videos ORDER BY id DESC";
        $set = $mysqli_connection->query($consult);
        while ($linhas = mysqli_fetch_array($set)) {
            $nome = $linhas['usuario'];
            $horas = $linhas['id'];
            $dia = $linhas['momento'];
            $hoje = date('d');
            $ontem = $hoje - 1;

            echo "<hr>";
            echo "<a href='clube_do_video.php'><p><img src='img/video.png' width='10px' height='10px'><strong id='jj'>  $nome</strong > adicionou um video novo ao VídeoClub em ( $dia) </p></a>";
        }

        echo "<br>";
        echo "Biblioteca:";

        $consult = "SELECT * FROM docs ORDER BY id DESC";
        $set = $mysqli_connection->query($consult);
        while ($linhas = mysqli_fetch_array($set)) {

            $nomee = $linhas['usuario'];
            $horas = $linhas['id'];
            $doc = $linhas['documento'];
            $dia = $linhas['momento'];
            $hoje = date('d');
            $ontem = $hoje - 1;

            echo "<hr>";
            echo "<a href='documentos.php'><p><img src='img/livros.png' width='10px' height='10px'><strong id='jj'>  $nomee</strong> publicou um documento '" . $doc . "' em ( $dia) </p></a>";
        }

        echo "<br>";
        echo "Fotos:";

        $consult = "SELECT * FROM fotos ORDER BY id DESC";
        $set = $mysqli_connection->query($consult);
        while ($linhas = mysqli_fetch_array($set)) {

            $nomeee = $linhas['usuario'];
            $horas = $linhas['id'];

            $dia = $linhas['momento'];
            $hoje = date('d');
            $ontem = $hoje - 1;

            echo "<hr>";
            echo "<a href='post_foto.php'><p><img src='img/pessoas.png' width='10px' height='10px'><strong id='jj'>  $nomeee</strong> publicou uma foto em ' ( $dia) </p></a>";
        }

        echo "<br>";
        echo "Comentarios:";

        $consult1 = "SELECT * FROM comentarios ORDER BY id DESC";
        $set1 = $mysqli_connection->query($consult1);
        while ($linhas1 = mysqli_fetch_array($set1)) {

            $nomeee1 = $linhas1['use_name'];
            $post_id = $linhas1['post_id'];

            $dia = $linhas['datas'];
            $cons = "SELECT * FROM postagens WHERE id=$post_id";
            $se = $mysqli_connection->query($cons);
            $linha = mysqli_fetch_array($se);

            $nom = $linha['username'];
            $idpost = $linha['id'];
            $nome = $_SESSION['login'];

            echo "<hr>";

            if ($nom == $nome || $nome == $nom) {
                echo "<a href='comentar.php?post_id=$idpost'><p><img src='img/comentario.png' width='10px' height='10px'><strong id='jj'>  $nomeee1</strong> comentou a tua publicação  </p></a>";
            }

            if ($nomeee1 == $nom) {
                echo "";
            } else {
                echo "<a href='comentar.php?post_id=$idpost'><p><img src='img/comentario.png' width='10px' height='10px'><strong id='jj'>  $nomeee1</strong> comentou a publicação de <strong>$nom</strong> </p></a>";
            }
        }
        echo "<br>";
        echo "OLX:";

        $consultq = "SELECT * FROM empregos ORDER BY id DESC";
        $setq = $mysqli_connection->query($consultq);
        while ($linhas = mysqli_fetch_array($setq)) {

            $nomees = $linhas['usuario'];
            $diaa = $linhas['momento'];

            echo "<hr>";
            echo "<a href='pub_emprego.php'><p><img src='img/card.png' width='10px' height='10px'><strong id='jj'>  $nomees</strong> postou um anúncio na <i> OLX </i> em ( $diaa) </p></a>";
        }
        ?>
    </fieldset>
</body>

</html>