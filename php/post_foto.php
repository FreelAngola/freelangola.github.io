<?php
session_start();
include_once("header.php");

$a = $_SESSION['pp'];
$sqli = "SELECT nome FROM cadastrados WHERE pp='$a'";
$resultadoas = $mysqli_connection->query($sqli);
$usuarioo = mysqli_fetch_array($resultadoas);
$nom = $usuarioo['nome'];
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tecnologia, inovação, i5, katumbela,facebook, video, partilhar,aplicativos, app, apk, fotos, joao, gm, joaf, joao, robotica, projectos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postar fotos</title>
    <link rel="icon" href="../img/icon.JPG" />
    <style>
        #post {
            opacity: .8;
            border-radius: 18px;
            border-color: violet;

            border: 0.9px;
            border-color: aqua;
        }

        #img {
            width: 50%;
            height: 80%x;
            margin-left: 12px;

        }

        #leg,
        #name {
            margin-left: 20px;
        }

        #a_aj {
            text-decoration: none;
            color: white;
        }

        #name {
            color: rgb(192, 124, 255);
        }

        .foot {
            background-color: rgb(192, 124, 255);
            margin: 0%;
        }

        .sub_b {
            float: right;
            text-align: center;
            margin-left: 50px;
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

        * {
            font-family: Century Gothic;
            margin-left: 0;
            margin-right: 0;
        }

        #fie1 {
            border-radius: 18px;
            border: 0.9px;
        }

        #sub {
            opacity: .8;
            margin-top: 15sp;
            padding: 15px;
            border: 0.9px;
            text-align: center;
            border-radius: 18px;
            border-color: rgb(224, 224, 224);
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
                    echo "(" . $res . ")";

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




    <fieldset id="fie1">
        <form action="td.php?" method="post" enctype="multipart/form-data">
            <textarea name="legenda" id="b" cols="20" placeholder="descreva aqui a sua loja" rows="2"></textarea>
            <input type="file" name="file" id="post">
            <div class="sub_b"><input type="submit" name="submit" value="postar" id="post"></div>
        </form>
    </fieldset>
    <p id="php1">
        <center>
            <p id="cab">fotos postadas</p>
        </center>

        <?php

        // Seleciona todos os usuários
        $sql = "SELECT * FROM fotos ";
        $resultado = $mysqli_connection->query($sql);
        // Exibe as informações de cada usuário
        while ($usuario = mysqli_fetch_object($resultado)) {

            // armazenei esta variavel pradepois fazer o sistema de comentarios nas fotos!!!
            $idd = $usuario->id;

            echo "<hr><strong> <p id='name'>" . $usuario->usuario . "</p></strong>";
            echo "<span id='leg'>" . $usuario->legenda . "</span>";
            echo "<div class='foto'><img src='uploads/" . $usuario->foto . "' alt='Foto de exibição' id='img' /><div><br><br>";
        }

        ?>
        <hr>
    <div class="foot">
    </div>
</body>

</html>