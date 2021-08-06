<?php
session_start();
include_once("header.php");

$b = $_SESSION['pp'];
$consulta = "SELECT * from cadastrados WHERE pp='$b'";
$resultado = $mysqli_connection->query($consulta);
$dados = mysqli_fetch_array($resultado);
$per = $dados['nome'];
$ia = $dados['id'];

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="tecnologia, inovação, i5, katumbela,facebook, video, partilhar,aplicativos, app, apk, fotos, joao, gm, joaf, joao, robotica, projectos">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>perfil</title>
  <link rel="icon" href="icon.JPG" />

  <style>
    #a_top {
      text-decoration: none;
      color: white;
    }

    hr {
      opacity: .4;
    }

    #a_fie_post {
      margin-left: 3px;
      text-decoration: none;
    }

    #img {
      width: 70px;
      height: 70px;
      border-radius: 14px;
    }

    #fie1 {
      border-radius: 21px;
      border: 0.9px;
    }

    .ln {
      display: inline;

    }

    #s {
      font-size: 9pt;
    }

    .p_list {
      background-color: rgb(192, 124, 255);
      text-decoration: none;
      border-radius: 5px;
      color: white;

    }

    form {
      margin-top: 10px;
    }

    #fie2 {
      border-radius: 18px;
      border: 0.9px;
      Borde: 0.9px;
      border-color: rgb(192, 124, 255);
      background-color: rgb(192, 124, 255);

    }

    #img {
      width: 70px;
      height: 70px;
      border-radius: 14px;
    }

    #a_aj {
      text-decoration: none;
      color: white;
    }

    .foot {
      background-color: rgb(192, 124, 255);
      margin: 0%;
    }

    body {
      font-family: Century Gothic;
      font-size: 12pt;
      margin-left: 0;
      margin-top: 0;
      margin-right: 0;
    }

    #img {
      width: 70px;
      height: 70px;
      border-radius: 14px;
    }

    #post {
      opacity: .8;
      border-radius: 18px;
      border-color: violet;
    }

    #st {

      color: violet;
    }

    hr {
      opacity: .4;
    }

    a {
      text-decoration: none;
    }

    .sub_b {
      float: right;
      text-align: center;
      margin-left: 50px;
    }

    #img {
      border-radius: 28px;
      border-color: violet;
    }

    #sub {

      opacity: .8;
      margin-top: 15sp;
      padding: 15px;
      text-align: center;
      border-radius: 18px;
      border-color: rgb(224, 224, 224);
    }

    #mari {
      margin-top: 0;
    }

    #mar,
    #mari {
      margin-left: 10px;
    }

    .perfil_picture {
      border-radius: 35px;
    }
  </style>
</head>

<body>

  <fieldset id="fie2">
    <center><a id="a_top" href="site.php">Inicial | </a>

      <a id="a_top" href="perfil_gokside_2020.php">Perfil |</a>
      <a id="a_top" href="chatgoksidersonline.php">Amigos Online <?php $fu = $_SESSION['chat'];
                                                                  if ($fu < 1) {
                                                                    echo "";
                                                                  }
                                                                  if ($fu > 0) {
                                                                    echo "(" . $fu . ")";
                                                                  } ?>

        |</a>

      <a id="a_top" href="notificacao.php"><strong>Novidades <?php $fuu = $_SESSION['noti'];
                                                              if ($fuu < 1) {
                                                                echo "";
                                                              }
                                                              if ($fuu > 0) {
                                                                echo "(" . $fuu . ")";
                                                              } ?>

        </strong>|</a>

      <a id="a_top" href="mensagens.php"><strong>Conversas <?php $consult = "SELECT DISTINCT mensageiro FROM msg ";
                                                            $resu = $mysqli_connection->query($consult);
                                                            $res = mysqli_num_rows($resu);

                                                            $rest = $res - 1;
                                                            echo "(" . $rest . ")";

                                                            ?> </strong>|</a>


      <a id="a_top" href="pub_emprego.php"><strong>OLX <?php $consultr = "SELECT * FROM empregos ";
                                                        $resur = $mysqli_connection->query($consultr);
                                                        $resr = mysqli_num_rows($resur);
                                                        echo "(" . $resr . ")";

                                                        ?> </strong>|</a>
      <a id="a_top" href="covid.html">Sobre a COVID-19 |</a>
      <a id="a_top" href="jogos.html">Jogos |</a>
      <a id="a_top" href="menu.php">Menu </a>

    </center>
  </fieldset>
  <center>
    <fieldset id="fie1">
      <?php

      $sql = "SELECT * FROM perfil_fotos WHERE usuario_id='$ia'";
      $resultado = $mysqli_connection->query($sql);
      // Exibe as informações de cada usuário
      while ($usuario = mysqli_fetch_object($resultado)) {

        // Exibimos o nome e email
        echo "<strong id='name'>" . $usuario->usuario . " <br></strong>";


      ?>
      <?php echo "<a href='uploads/" . $usuario->foto . "'><center><div class='foto'><img src='uploads/" . $usuario->foto . "' alt='" . $per . "' id='img' /></a></div></center>";
      } ?><br><a href="perpic.php">adicionar uma foto para o perfil</a>
      <p class="perfil_name"><strong><?= $per ?></strong><br><button id='post'><a href="seguidoresgokside.php">Seguidores: <?php

                                                                                                                            $iddo = $_SESSION['id'];
                                                                                                                            $consultac = "SELECT * FROM seguidores WHERE seguindo_id='$iddo'";
                                                                                                                            $resultadoc = $mysqli_connection->query($consultac);
                                                                                                                            $rec = mysqli_num_rows($resultadoc);
                                                                                                                            echo $rec; ?></a></button></p>
    </fieldset>
  </center>


  <?php

  $consulta = "SELECT * from postagens where username='$per'";
  $resultado = $mysqli_connection->query($consulta);
  while ($dados = mysqli_fetch_array($resultado)) {
  ?>
    <hr>
    <p id='mar'><?php echo "<strong id='st'>" . $dados['username'] . "</strong>"; ?>
      <?php echo "<br>" . $dados['conteudo'] . ""; ?></p><?php
                                                          echo "<span id='mar'><small id='s'>" . $dados['momento'] . "</small></span>";
                                                        } ?>
  <hr>
  <div class="foot">
  </div>



</body>

</html>