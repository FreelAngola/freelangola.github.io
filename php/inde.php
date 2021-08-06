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

$sql = "INSERT INTO cadastrados(nome,email,nascimentos,pais,telefone,pp,criadoEm) VALUES ('$nome','$email' ,'$data','$pais','$tel','$pass',now())";
$resultado = $mysqli_connection->query($sql);

echo "obrigado por submeter se ao nosso serviço $nome. a sua conta foi criada, você poderá desfrutar do melhor!";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title>conta gokside</title>
</head>

<body>
    <a href="index.html">
        <button>Iniciar Sessão</button>
    </a>
</body>

</html>