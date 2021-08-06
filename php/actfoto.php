<?php
  session_start();
  include("header.php");

// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['submit'])) {
  
  // Recupera os dados dos campos
  $nome =  $_SESSION['login'];
  $idd =  $_SESSION['id'];
  $foto = $_FILES["file"];
  
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
    if(!preg_match("/^image\/(pjpeg|png|jpg|jpeg|gif)$/", $foto["type"])){
      $error[1] = "O ficheiro não é compatível.";
    } 

    // Pega as dimensões da imagem
    $dimensoes = getimagesize($foto["tmp_name"]);

    // Verifica se a largura da imagem é maior que a largura permitida
    if($dimensoes[0] > $largura) {
      $error[2] = "A largura da imagem não deve ser maior a ".$largura." pixels!";
    }

    // Verifica se a altura da imagem é maior que a altura permitida
    if($dimensoes[1] > $altura) {
      $error[3] = "Altura da imagem não deve ser maior a ".$altura." pixels!";
    }
    
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if($foto["size"] > $tamanho) {
      $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
    }

    // Se não houver nenhum erro
    if (count($error) == 0) {
    
      // Pega extensão da imagem
      preg_match("/\.(gif|bmp|png|jpg|jpeg|3gp|){1}$/i", $foto["name"], $ext);

      // Gera um nome único para a imagem
      $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

      // Caminho de onde ficará a imagem
      $caminho_imagem = "uploads/" . $nome_imagem;

      // Faz o upload da imagem para seu respectivo caminho
      move_uploaded_file($foto["tmp_name"], $caminho_imagem);
  
      // Insere os dados no banco
      $sql = "INSERT INTO arquivos (usuario, foto) VALUES ('$idd','$nome_imagem')";
      $resultado = $mysqli_connection->query($sql);
      
      // Se os dados forem inseridos com sucesso
      if ($resultado){
        header("location:perfilfreela.php");
      }
    }

    // Se houver mensagens de erro, exibe-as
    if (count($error) != 0) {
      foreach ($error as $erro) {
        echo $erro . "erro! <br />";
      }
    }
  }
}
?>