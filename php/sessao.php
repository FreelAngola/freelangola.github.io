<?php

$db_host='fdb22.awardspace.net'; //Should contain the "Database Host" value
$db_name='3498505_cadastro'; //Should contain the "Database Name" value
$db_user='3498505_cadastro'; //Should contain the "Database User" value
$db_pass='katumbela20'; //Should contain the "Database Password" value
 $numero = $_POST["num"];
 $pass = $_POST["pass"];
 $mysqli_connection = new MySQLi($db_host, $db_user, $db_pass, $db_name);



 $dados	= "SELECT * FROM cadastrados WHERE  telefone='$numero' AND pp='$pass'";					
 $resultado = $mysqli_connection->query($dados);
 if(mysqli_num_rows ($resultado) > 0)
 {
 session_start();
  $_SESSION['telefone']=$numero;
    $_SESSION['pp']=$pass;
    
    	$online = "UPDATE cadastrados SET online = '1' WHERE pp = '".$_SESSION['pp']."' AND telefone = '".$_SESSION['telefone']."'" or die(mysqli_error($mysqli_connection));
	$set=$mysqli_connection->query($online);
        header('location:site.php');
}
else{
?>
<html>
<head><title>Erro ao Iniciar Sessão</title>
<link rel="icon" href="icon.JPG"/>
</head>
<style>
*{
        font-family: Century Gothic;
        font-size:12pt;
    }
</style>
<body>
<p><?php echo "Os dados inseridos não estão correctos"; ?></p>
<p><?php echo "<a href='criar_conta.html'> Crie uma conta </a> e <a href='index.php'>Inicie Sessão</a> "; }?></p>

</body>
</html>