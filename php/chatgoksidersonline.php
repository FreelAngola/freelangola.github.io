<?php
session_start();
include("header.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amigos Em Linha na rede</title>
  <link rel="icon" href="../img/icon.JPG" />
  <style>
    #a_top {
      text-decoration: none;
      color: white;
      display: inline;
    }

    a {
      text-decoration: none;
    }

    #fie2 {
      border-radius: 18px;
      border: 0.9px;
      margin-top: 0px;
      border-color: rgb(192, 124, 255);
      background-color: rgb(192, 124, 255);
    }

    #il {
      margin-bottom: 0;
    }

    p {
      margin-top: 5px;
      margin-left: 20px;
    }

    li {
      color: green;
    }

    body {
      background: rgba(247, 247, 247, 0.911);
    }

    * {
      margin: 0;
      font-family: Century Gothic;
      font-size: 12pt;
    }

    #id {
      margin-left: 30px;
      margin-right: 30px;
      border-radius: 15px;
      background-color: white;
      border: 0.9px;
    }
  </style>
</head>

<body>
  <fieldset id="fie2">
    <center>
      <a id="a_top" href="site.php">Inicial |</a>
      <a id="a_top" href="perfil_gokside_2020.php">Perfil |</a>
      <a id="a_top" href="chatgoksidersonline.php">Amigos Online <?php $fu = $_SESSION['chat'];
                                                                  if ($fu < 1) {
                                                                    echo "";
                                                                  };
                                                                  if ($fu > 0) {
                                                                    echo "(" . $fu . ")";
                                                                  } ?> |</a>
      <a id="a_top" href="notificacao.php">
        <strong>
          Novidades <?php $fuu = $_SESSION['noti'];
                    if ($fuu < 1) {
                      echo "";
                    };
                    if ($fuu > 0) {
                      echo "(" . $fuu . ")";
                    } ?>
        </strong> |
      </a>
      <a id="a_top" href="mensagens.php">
        <strong>
          Conversas <?php $consult = "SELECT DISTINCT mensageiro FROM msg ";
                    $resu = $mysqli_connection->query($consult);
                    $res = mysqli_num_rows($resu);
                    echo "(" . $res . ")"; ?>
        </strong> |
      </a>
      <a id="a_top" href="pub_emprego.php">
        <strong>
          OLX <?php $consultr = "SELECT * FROM empregos ";
              $resur = $mysqli_connection->query($consultr);
              $resr = mysqli_num_rows($resur);
              echo "(" . $resr . ")"; ?>
        </strong> |
      </a>
      <a id="a_top" href="covid.html">Sobre a COVID-19 |</a>
      <a id="a_top" href="jogos.html">Jogos |</a>
      <a id="a_top" href="menu.php">Menu</a>

    </center>
  </fieldset>

  <?php
  $consulta1 = "SELECT * FROM cadastrados WHERE online = '1'";
  $consulta2 = $mysqli_connection->query($consulta1);
  $ful = mysqli_num_rows($consulta2);
  $_SESSION['chat'] = $ful;
  ?>

  <p>Amigos Online:</p>

  <fieldset id="id">
    <ul>
      <?php
      while ($nombres = mysqli_fetch_array($consulta2)) {
        $nmeunom = $_SESSION['login'];
        $chatnom = $nombres['nome'];
        $ides = $nombres['id'];

        if ($chatnom == $nmeunom) {
          echo "";
        } else {
          echo "<ul><li><a href='mensagem.php?iduser=$ides' >" . $chatnom . "</a></li></ul>";
        }
      }
      ?>
    </ul>
  </fieldset>

</body>

</html>