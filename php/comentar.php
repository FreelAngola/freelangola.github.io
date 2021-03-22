<?php
session_start();
include("header.php");
?>
<?php
$a=$_SESSION['pp'];

$consultar = "SELECT nome from cadastrados WHERE pp='$a' "; 
$resultadoss = $mysqli_connection->query($consultar); 
$dados = mysqli_fetch_array($resultadoss);
$nome=$dados['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_GET['post']?></title>
    <link rel="icon" href="../img/icon.JPG"/>
    <style>
        *{
            font-size: 15px;
            font-family: Century Gothic;
            margin-left:0;
            margin-right:0;
        }
        #come{
            background: rgb(219, 219, 219);
        }
        #post{
            opacity: .8;
            border-radius: 18px;
            border-color: violet;
            border: 0.9px;
        }
        a{
            text-decoration: none;
            color:rgb(192, 124, 255);
        }
        h1{
            color:violet;
        }
        #cc{
            font-size: 7px;
        }
        #pos{
            opacity: .8;
            border-radius: 18px;
            border-color: violet;
            border: 0.9px;
            margin-right:0px;
            font-family:Lucida Handwriting;
        }
        #post{
            opacity: .8;
            border-radius: 18px;
            border-color: violet;
            border: 0.9px;
        }
    </style>
</head>
<body>
    <button id="pos">
        <a href="site.php">voltar a pagina inicial</a>
    </button>
    <?php
        $idd=$_GET["post_id"];
        $idee=$idd;
        $_SESSION["id_do_post"]=$idee;
        $consular = "SELECT username, conteudo, momento FROM postagens WHERE id='$idee'"; 
        $resultadoss = $mysqli_connection->query($consular); 
        $dados = mysqli_fetch_array($resultadoss);
        $dir_perfil=$dados['username'];

        $cons = "SELECT id from cadastrados WHERE nome='$dir_perfil' "; 
        $resu = $mysqli_connection->query($cons); 
        $dads = mysqli_fetch_array($resu);
        $nomr=$dads['id'];
        echo "<h1><a href='perfil.php?gokside_profile_id=$nomr '>".$dados['username']."</a> </h1>";
        echo $dados['conteudo'];
        echo "<br><br><small id='cc'>".$dados['momento']." </small>";
    ?>
    <hr>
    <p id="come">
        <?php
            echo "<h2>Comentarios:</h2>";
            $consultar = "SELECT use_name, comentario  FROM comentarios WHERE post_id=$idee LIMIT 0,100 "; 
            $resultadosss = $mysqli_connection->query($consultar);; 
            while ($dados =mysqli_fetch_array($resultadosss)){  
                $hhh=$dadoss['use_name'];
                $conss = "SELECT id FROM cadastrados WHERE nome='$hhh' "; 
                $resuu = $mysqli_connection->query($conss); 
                $dades = mysqli_fetch_array($resuu);
                $nomrr=$dades['id'];
                echo "<h1><a href='perfil_gokside_2020.php?gokside_profile_id=$nomrr '>".$dados['use_name']." </a></h1>";
                echo $dados['comentario'];
            }
            echo "<br><form action='empe.php?post_id=$idee' method='post' enctype='multipart/form-data'><input type='hidden' name='postid' value='$idee'><input type='hidden' name='nome' value='$nome'><textarea name='coment'   cols='30' rows='3' placeholder='comentar' ></textarea ><input type='submit' value='comentar' id='post'></form>";
        ?>
    </p>
</body>
</html>