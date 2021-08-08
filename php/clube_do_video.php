<?php
session_start();
include("header.php");
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
  <title>clube dos videos</title>
  <link rel="icon" href="../img/icon.JPG" />
  <style>
    * {
      font-family: Century Gothic;
      font-size: 12pt;
      margin: 0;
    }

    #post {
      opacity: .8;
      border-radius: 18px;
      border-color: violet;
      border: 0.9px;
      border-color: aqua;
    }

    #sm {
      font-size: 7pt;
      margin-left: 0%;
    }

    h2 {
      color: rgb(192, 124, 255);
    }

    #a_aj {
      text-decoration: none;
      color: white;
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
      border-color: rgb(192, 124, 255);
      border: 0.9px;
      background-color: rgb(192, 124, 255);
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

    #po {
      width: 100%;
    }
  </style>
</head>

<body>
  <fieldset id="fie2">
    <center>
      <a id="a_top" href="site.php">Inicial |</a>
      <a id="a_top" href="perfil_gokside_2020.php">Perfil |</a>
      <a id="a_top" href="chatgoksidersonline.php">
        Amigos Online
        <?php $fu = $_SESSION['chat'];
        if ($fu < 1) {
          echo "";
        };
        if ($fu > 0) {
          echo "(" . $fu . ")";
        } ?> |
      </a>
      <a id="a_top" href="notificacao.php">
        <strong>
          Novidades
          <?php $fuu = $_SESSION['noti'];
          if ($fuu < 1) {
            echo "";
          };
          if ($fuu > 0) {
            echo "(" . $fuu . ")";
          }; ?>
        </strong> |
      </a>
      <a id="a_top" href="mensagens.php">
        <strong>
          Conversas
          <?php $consult = "SELECT DISTINCT mensageiro FROM msg ";
          $resu = $mysqli_connection->query($consult);
          $res = mysqli_num_rows($resu);
          echo "(" . $res . ")"; ?>
        </strong> |
      </a>
      <a id="a_top" href="pub_emprego.php">
        <strong>
          OLX
          <?php $consultr = "SELECT * FROM empregos ";
          $resur = $mysqli_connection->query($consultr);
          $resr = mysqli_num_rows($resur);
          echo "(" . $resr . ")"; ?>
        </strong> |
      </a>
      <a id="a_top" href="../html/covid.html">Sobre a COVID-19 |</a>
      <a id="a_top" href="../html/jogos.html">Jogos |</a>
      <a id="a_top" href="menu.php">Menu</a>
    </center>
  </fieldset>

  <fieldset id="fie1">
    <form action="musica.php" method="post" enctype="multipart/form-data">
      <textarea name="legenda" cols="20" placeholder="legenda" rows="2"></textarea>
      <input type="file" name="file" id="po">
      <input type="submit" name="submit" value="postar" id="post">
    </form>
  </fieldset>

  <center>
    <p id="php1">
    <h2>videos</h2>
    </p>
    <?php
    $fetchVideos = mysqli_query($mysqli_connection, "SELECT * FROM videos");
    while ($row = mysqli_fetch_assoc($fetchVideos)) {
      $location = $row['video'];
      $fetchVideo = mysqli_query($mysqli_connection, "SELECT * FROM videos WHERE video='$location'");
      $rows = mysqli_fetch_array($fetchVideo);
      echo "<div ><hr>";
      echo "<h2>" . $rows['usuario'] . "</h2>";
      $location->usuario;
      echo "" . $rows['legenda'] . "<br>";
      echo "<video src='uploads/" . $location . "' controls width='100%' height='450px' >" . $rows['momento'] . "</small><br>";
      echo "<hr></div>";
    }
    ?>
  </center>
  <hr>
  <div class="foot">
  </div>
</body>

</html>