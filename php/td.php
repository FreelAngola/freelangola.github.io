<?php
   session_start();
   include("header.php");
    ?>
    <?php
    $per=$_SESSION['pp'];
$consult = "SELECT nome FROM cadastrados WHERE pp='$per'"; 
$resultad = $mysqli_connection->query($consult);
$dad = mysqli_fetch_array($resultad);

                $nomes=$dad['nome'];
if (isset($_POST['submit'])) {
	
	// Recupera os dados dos campos
	$nome =  $nomes;
	$foto = $_FILES["file"];
        $legend=$_POST['legenda'];
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 150000000;
		// Altura máxima em pixels
		$altura = 1800000000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg|mp3|mp4|wav|3gp|){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "uploads/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			$sqli = "INSERT INTO fotos(usuario, foto, legenda) VALUES ('$nome','$nome_imagem','$legend')";
		$resultado = $mysqli_connection->query($sqli);
			// Se os dados forem inseridos com sucesso
                        if(!$resultado){
                        echo"error";
                       }
                       else{
                  require('post_foto.php');}
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}

?>