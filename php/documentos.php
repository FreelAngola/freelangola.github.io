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
  <title>Biblioteca</title>
  <link rel="icon" href="icon.JPG" />
  <style>
    #post {
      opacity: .8;
      border-radius: 18px;
      border-color: violet;

      border: 0.9px;
      border-color: aqua;
    }

    #img {
      width: 350px;
      height: 500px;
    }

    #a_aj {
      text-decoration: none;
      color: white;
    }

    #leg {
      margin-top: 0;
      font-size: 10pt;
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
      margin-top: 0px;
      border: 0.9px;
      border-color: rgb(192, 124, 255);
      background-color: rgb(192, 124, 255);

    }

    * {
      font-family: Century Gothic;
      font-family: 12pt;
      margin-left: 0;
      margin-right: 0;
    }

    #fie1 {
      border-radius: 18px;
      border: 0.9px;
    }

    a {
      text-decoration: none;
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
        } ?>

        |
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
      <a id="a_top" href="../html/covid.html">Sobre a COVID-19 |</a>
      <a id="a_top" href="../html/jogos.html">Jogos |</a>
      <a id="a_top" href="menu.php">Menu </a>

    </center>
  </fieldset>

  <fieldset id="fie1">
    <form action="doc.php" method="post" enctype="multipart/form-data">
      <textarea name="descricao" id="b" cols="15" placeholder="legenda" id="post" rows="2"></textarea>
      <br>
      <input type="file" name="file" id="post">
      <div class="sub_b">
        <input type="submit" name="submit" value="postar" id="post">
      </div>
    </form>
  </fieldset>

  <p id="php1">
    <center>
      <p id="cab">Biblioteca</p>
    </center>

    <?php
    // Seleciona todos os usuários
    $sql = "SELECT * FROM docs ";
    $resultado = $mysqli_connection->query($sql);
    // Exibe as informações de cada usuário
    while ($usuario = mysqli_fetch_object($resultado)) {

      // Exibimos o nome e email
      echo "<hr><strong><span id='name'>" . $usuario->usuario . "</span></strong><br>";
      echo "<span id='leg'>" . $usuario->legenda . "</span>";
      echo "<br><i class='foto'><img src='uploads/" . $usuario->documento . "' color='violet' alt='" . $usuario->documento . "' type='application/pdf' width=100%  ><br><a href='uploads/" . $usuario->documento . "'><button id='post' >Ler/baixar </button></a></i>";
    }
    ?>
</body>

</html>