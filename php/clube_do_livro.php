<?php
session_start();
include('header.php');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>clube dos livros</title>
  <style>
    #post {
      opacity: .8;
      border-radius: 18px;
      border-color: violet;
      color: #c5e5ff;
      border-color: aqua;
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
      background-color: rgb(192, 124, 255);
    }

    #span {
      font-size: 9pt;
    }

    #nome {
      color: violet;
    }

    * {
      font-family: Century Gothic;
      margin: 0;
    }

    #fie1 {
      border-radius: 18px;
    }

    #sub {
      opacity: .8;
      margin-top: 15sp;
      padding: 15px;
      text-align: center;
      border-radius: 18px;
      border-color: rgb(224, 224, 224);
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
      <a id="a_top" href="../html/covid.html">Sobre a COVID-19 |</a>
      <a id="a_top" href="../html/jogos.html">Jogos |</a>
      <a id="a_top" href="menu.php">Menu</a>
    </center>
  </fieldset>
  <fieldset id="fie1">
    <form action="doc.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file" id="post">
      <div class="sub_b">
        <input type="submit" name="submit" value="postar" id="sub">
      </div>
    </form>
  </fieldset>
  <center>
    <p id="php1">
      <?php
      $log = $_SESSION['nome'];
      echo "<strong>$log</strong> publique livros, e as outras pessoas poderão fazer o download, ou colecione citações e depois peça o seu livro empacotado por suas citações!";
      ?>
    </p>
  </center>
  <?php
  // Seleciona todos os usuários
  $sql = "SELECT * FROM docs ";
  $resultado = $mysqli_connection->query($sql);
  // Exibe as informações de cada usuário
  while ($usuario = mysqli_fetch_object($resultado)) {
    // Exibimos o nome e email
    echo "<hr ><strong id='nome'> <p>" . $usuario->usuario . "</p></strong>";
    echo "<img src='uploads/" . $usuario->foto . "' alt=' $usuario->documento ' /><br><span id='span'>$usuario->momento</span><br><button type='submit' onclick='window.open('$usuario->foto')'>Download</button>";
  }
  ?>
</body>

</html>