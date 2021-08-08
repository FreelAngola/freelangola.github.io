<?php
session_start();
include("header.php");

if ((!isset($_SESSION['telefone']) == true) and (!isset($_SESSION['pp']) == true)) {
  unset($_SESSION['telefone']);
  unset($_SESSION['pp']);
  header('location:sessao.php');
}

$a = $_SESSION['pp'];
$_SESSION["passe"] = $a;
$consulta = "SELECT * FROM cadastrados WHERE pp='$a'";
$resultado =  $mysqli_connection->query($consulta);
$dado = mysqli_fetch_array($resultado);

$log = $dado['nome'];
$_SESSION['login'] = $dado['nome'];
$_SESSION['nome'] = $dado['nome'];
$_SESSION['id'] = $dado['id'];
$lide = $dado['id'];
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="tecnologia, inovação, i5, katumbela,facebook, video, partilhar,aplicativos, app, apk, fotos, joao, gm, joaf, joao, robotica, projectos">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina inicial</title>
  <link rel="icon" type="image/icon" href="../img/picture.jpg" />
  <style>
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
      margin-left: 2px;
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
        }; ?> |
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
          }; ?> |
        </strong>
      </a>
      <a id="a_top" href="mensagens.php">
        <strong>
          Conversas
          <?php $consult = "SELECT DISTINCT mensageiro FROM msg ";
          $resu = $mysqli_connection->query($consult);
          $res = mysqli_num_rows($resu);
          $rest = $res - 1;
          echo "(" . $rest . ")"; ?>
        </strong> |
      </a>
      <a id="a_top" href="pub_emprego.php">
        <strong>
          OLX
          <?php $consultr = "SELECT * FROM empregos ";
          $resur = $mysqli_connection->query($consultr);
          $resr = mysqli_num_rows($resur);
          echo "(" . $resr . ")"; ?> |
        </strong>
      </a>
      <a id="a_top" href="covid.html">Sobre a COVID-19 |</a>
      <a id="a_top" href="jogos.html">Jogos |</a>
      <a id="a_top" href="menu.php">Menu</a>
    </center>
  </fieldset>

  <fieldset id="fie1">
    <form action="add.php" method="post" enctype="multipart/form-data" id="d">
      <?php
      $sql = "SELECT * FROM perfil_fotos WHERE usuario_id='$lide'";
      $resultado = $mysqli_connection->query($sql);
      // Exibe as informações de cada usuário
      while ($usuario = mysqli_fetch_object($resultado)) {
        echo "<div class='foto'><img src='uploads/" . $usuario->foto . "' alt='" . $per . "' id='im' />";
      };
      ?>
      <textarea name="body" cols="20" rows="2" id="pos" placeholder="o que estás pensando?"></textarea>
      <div class="sub_b">
        <input type="submit" value="postar" id="post">
      </div>
    </form>
    <br><br>
    <img src="album.png" alt="fotos" width="12px" height="12px">
    <a id="a_fie_post" href="post_foto.php">Fotos </a>
    <img src="fotomaior.png" alt="fotos" width="12px" height="12px">
    <a id="a_fie_post" href="clube_do_video.php">Vídeos </a>
    <img src="escrever.png" alt="fotos" width="12px" height="12px">
    <a id="a_fie_post" href="documentos.php">Biblioteca </a>
    <img src="anunciar.png" alt="fotos" width="12px" height="12px">
    <a id="a_fie_post" href="musicas.php">Músicas </a>
  </fieldset>

  <?php
  $db_host = 'fdb22.awardspace.net'; //Should contain the "Database Host" value
  $db_name = '3498505_cadastro'; //Should contain the "Database Name" value
  $db_user = '3498505_cadastro'; //Should contain the "Database User" value
  $db_pass = 'katumbela20'; //Should contain the "Database Password" value

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $data = $_POST['data'];
  $pais = $_POST['pais'];
  $tel = $_POST['telefone'];
  $pass = $_POST['palavrapasse'];

  $mysqli_connection = new MySQLi($db_host, $db_user, $db_pass, $db_name);
  $consulta = "SELECT * FROM postagens ORDER BY id DESC";
  $resultado = $mysqli_connection->query($consulta);
  
  while ($dados = mysqli_fetch_array($resultado)) {
    $user = $dados['username'];
  }
  ?>
  <hr>
  <p>
  <h2>
    <?php
    $consut = "SELECT id FROM cadastrados WHERE nome='$user'";
    $resultao = $mysqli_connection->query($consut);
    $dado = mysqli_fetch_array($resultao);

    $id_do = $dado['id'];
    echo "<a href='perfil.php?gokside_profile_id=$id_do ' id='perf'>" . $dados['username'] . "</a>";
    ?>
  </h2>
  </p>
  <p>
    <?php
    $post_id = $dados['id'];
    echo "<span id='perfi'>" . $dados['conteudo'] . "</span>";
    echo "<br><br>";
    echo "<small id='s'>" . $dados['momento'] . "</small><br>";
    $consultaas = "SELECT * FROM comentarios WHERE post_id=$post_id ";
    $resultadoos = $mysqli_connection->query($consultaas);
    $aa = mysqli_num_rows($resultadoos);

    $consultal = "SELECT * from likes where post_id='$post_id'";
    $resulta = $mysqli_connection->query($consultal);
    $re = mysqli_num_rows($resulta);

    $consultale = "SELECT * from comentarios where post_id='$post_id'";
    $resultal = $mysqli_connection->query($consultale);
    $ree = mysqli_num_rows($resultal);

    if ($re > 0) {
      echo "<p><img src='like.png' alt='likes' id='perfi'><a href='#' >$re</a></p>";
    }
    echo "<a href='like.php?post=$post_id' id='perfi'> gosto </a><img src='ponto.gif' alt='likes' >";
    if ($aa > 0) {
      echo "<a href='comentar.php?post_id=$post_id' ><span>" . $aa . " comentarios</span></a>";
    } else {
      echo "<a href='comentar.php?post_id=$post_id' > comentar</a>";
    };
    ?>
  </p>
  <?php
  $consultaa = "SELECT * FROM comentarios WHERE post_id=$post_id LIMIT 10";
  $resultadoo = $mysqli_connection->query($consultaa);
  while ($dadoss = mysqli_fetch_array($resultadoo)) {
    $pub = $dados['conteudo'];
  }
  ?>
  <hr>
  <hr>
  <div class="foot">
  </div>
</body>

</html>