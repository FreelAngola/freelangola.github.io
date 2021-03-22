<?php
    session_start();
    include_once('header.php');

    $local = '';
    $room = 'd-none';

    if (isset($_GET['room_with']) and $_GET['room_with'] != '') {
        $local = 'd-none';
        $room = '';
        $chat_with = $_GET['room_with'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <main class="main" role="main">
        <nav class="navbar navbar-expand-md navbar-light bg-white box-shadow">
            <div class="container">
                <a href="#" class="navbar-brand">Mensagens</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#youchat" aria-controls="youchat" aria-expanded="false" aria-lbel="Toggle Button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="youchat">
                    <ul class="navbar navbar-nav">
                        <li class="nav-item"><a href="painel.php" class="nav-link">Pagina Inicial</a></li>
                    </ul>
                    <ul class="navbar navbar-nav ml-auto">
                        <li class="nav-item"><a href="../html/iniciarsessao.html" class="nav-link">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
            $eu=$_SESSION['id'];
            $conPoste = "SELECT DISTINCT eu FROM msg WHERE seu_id='$eu'"; 
            $resulte =  mysqli_query($mysqli_connection, $conPoste); 
            while($dadose = mysqli_fetch_array($resulte)){  
                $msgs= $dadose['eu'];
                if($msgs==$eu){
                    echo "";
                }
                else{
                    $consult = "SELECT id FROM cadastrados where nome='$msgs'"; 
                    $resultad = mysqli_query($mysqli_connection, $consult ); 
                    $dad = mysqli_fetch_array($resultad); 
                    $id= $dad['id'];
                    echo "<a href='mensagens.php?usernumer=$id'>".$msgs."</a><hr>";
                }
            }
        ?>
    </main>
</body>
</html>