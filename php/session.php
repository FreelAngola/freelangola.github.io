<?php
include('header.php');
 $numero = $_POST["email"];
 $pass = $_POST["pass"];
 

 $dados	= "SELECT * FROM cadastrados WHERE  email='$numero' AND pass='$pass'";					
 $resultado = $mysqli_connection->query($dados);
 if(mysqli_num_rows ($resultado) > 0)
 {
 session_start();
  $_SESSION['telefone']=$numero;
    $_SESSION['pass']=$pass;
    header('location:painel.php');
}
else{
?>
<html>
<head><title>Erro ao Iniciar Sessão</title>

    <script src='materialize/js/materialize.min.js'></script>
    <link rel='icon' type='img/blogs-for-freelancers.png' href='img/blogs-for-freelancers.png'/>

    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='materialize/css/materialize.css'>

<link rel='stylesheet' href='materialize/css/materialize.min.css'>

</head>
<style>
*{
        font-family: Century Gothic;
        font-size:12pt;
    }
</style>
<body class='container'>
<p><?php echo "Os dados inseridos não estão correctos"; ?></p>
<p><?php echo "<a href='criar_conta.html'> Crie uma conta </a> e <a href='index.html'>Inicie Sessão</a> "; }?></p>

</body>
</html>