<?php
session_start();
include_once('header.php');

if ((!isset($_SESSION['telefone']) == true) || (!isset($_SESSION['pass']) == true)) {
  unset($_SESSION['telefone']);
  unset($_SESSION['pp']);
}
$a = $_SESSION['pass'];
$_SESSION["passe"] = $a;

$consulta = "SELECT * FROM cadastrados WHERE pass='$a'";
$resultado =  $mysqli_connection->query($consulta);
$dado = mysqli_fetch_array($resultado);
$log = $dado['nome'];
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Gokside</title>
  <link rel="icon" href="icon.JPG" />
  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap/bootstrap.min.js"></script>

  <style>
    h1 {
      color: violet;
    }

    a {
      text-decoration: none;
    }

    * {
      margin: 0;
      font-family: Century Gothic;
      font-size: 12pt;
    }

    #a_top {
      text-decoration: none;
      color: white;
      display: inline;
    }

    h1,
    #i {
      margin-left: 15px;
    }

    #fie2 {
      border-radius: 18px;
      border: 0.9px;
      margin-top: 0px;
      border-color: rgb(192, 124, 255);
      background-color: rgb(192, 124, 255);

    }
  </style>
</head>

<body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light ">
    <a href="perfilfreela.php">
      <button class="btn btn-outline-primary">
        <?= $log ?>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
          <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
        </svg>
      </button>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
      <spam class="navbar-toggler-icon"></spam>
    </button>
    <div class="collapse navbar-collapse" id="navbarSite">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="dashboard.php" class="nav-link">Free Jobs</a></li>
        <li class="nav-item"><a href="chat.php" class="nav-link">Correio
          </a></li>
        <li class="nav-item"><a href="termosdeuso.php" class="nav-link">Termos de uso e regulamentos</a></li>
        <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="iniciarsessao.html" class="nav-link">logout</a></li>
      </ul>
    </div>
  </nav>

  <h1>Menu AngoFreela</h1>
  <hr>
  <a href="criticasgokside.php" id="i">Envie-nos sua sugestão/críticas</a><br>
  <a href="#" id="i" onclick="tp()">Termos/Políticas e sobre a plataforma</a><br>
  <a href="termosdeuso.php" id="i">Termos de uso</a><br>
  <a href="iniciarsessao.html" id="i">Terminar sessão</a>
  <p id="texto" hidden>
    SOBRE A PLATAFORMA
    O que propomos para o cliente a nível de negócio de forma muito geral.

    • Social Network
    • Informação Útil
    • Expansão de Negócios
    • Espaço de Divulgação
    • Solicitação de Livros
    • Entretenimento
    • Blogues dentro da plataforma
    • Conselhos de um empreendedor

    METAS

    1. Expandir a economia do país e levar esta além fronteiras.
    2. Ajudar a expandir o mercado de emprego, e contribuir na diminuição do desemprego da juventude angolana.
    3. Contribuir um pouco mais na literatura angolana e contribuir nos sonhos de estudantes angolanos escritores, e fornecer um espaço de compartilhamento de planos.
    FUNCIONALIDADES
    Uma plataforma que fornecerá funcionalidades como negociação entre os usuários onde esta mesma negociação estará sob os termos e políticas da plataforma, para efectuar este ato os usuários terão que autenticar suas contas de uma forma segura e de forma a reter dados de ambos e evitar fraudes, em fim, visto que estamos face à pandemia da Covid-19, e a cada dia vem surgindo novos vírus desta mesma família de vírus e já afectou quem sabe uma boa parte do país e do munto inteiro, é bem provável que este não termine tão fácil, no entanto com este teremos de axar meios quer seja tecnológicos ou outros para continuar com os trabalhos para não afectar demais a economia de cada país, com isto viemos propôr esta plataforma( gokside.myartsonline.com ) que de forma segura permitirá trabalhar quer seja em casa ou em algum outro lugar com maior segurança evitando contágios deste vírus mas ajudando e diversificando a economia. Cada jovem sonhador poderá seguir em frente com seus projectos com o nosso suporte, uma vez plataforma de negociação esta mesma terá QUIZ e FAQ do empreendedor, que por sua vez todo usuário que for autenticar sua conta como comercializador/empreendedor com a sua loja virtual receberá ou terá acesso à todos as dicas e conselhos de um empreendedor(conta do conselheiro empreendedor da plataforma) para melhor gestão da mesma caso queira.
    Nesta mesma plataforma terá por sua vez um espaço para jovens empreendedores criarem suas lojas virtuais e venderem seus produtos com segurança e por consequênte os compradores efetuarem suas compras com segurança, ou ainda funcionará da seguinte maneira como uma opção: o comprador efectua a compra e o vendedor recebrá uma notificação e poderá deixar o produto na nossa empresa e assim sucessivamente o comprador ir pegar o produto na empresa(para maior segurança quando o caso é em Luanda),como também poderão optar por fazê-los pessoalmente por entrega ao domicílio e facilitando o pessoal que não possui um cartão VISA ou mesmo MASTERCARD poderá pagar com a nossa nota nacional (Kwanza).
    Outro espaço aplicado a gokside é o espaço “biblioteca”, neste espaço o usuário poderá encontrar e/ou publicar livros do seu gosto ou da sua autoria. Jovens e estudantes que pensam em algum dia escrever algum livro ou um artigo, pois bem, neste espaço estes mesmos poderão realizá-los com uma ajuda da plataforma e comercializá-los na mesma plataforma(face a pandemia evitaremos enchentes em locais amplos).
    Em suma nesta mesma plataforma o usuário poderá tornar de forma pública seus projetos e momentos desde vídeos, músicas, documentos, aplicativos android, IOS e desktop. Poderá (Usuário) compartilhar frases, criar blogues sem ser necessário programação alguma, e tantas outras coisas mais.

    PROPOSTA DE VALOR
    1-Reduzir o número de fraudes no país.
    2-plataforma de entretenimento, pois garantirá o bem estar do usuário, acelera a expansão de matéria ou qualquer outro conteúdo submetido na plataforma.
    3-acelera o networking do usuário empreendedor e por sua vez o seu negócio."
  </p>

  <script>
    function tp() {
      alert("SOBRE A PLATAFORMA:  O que propomos para o cliente a nível de negócio de forma muito geral. •	Social Network •	Informação Útil•	Expansão de Negócios •	Espaço de Divulgação •	Solicitação de Livros •	Entretenimento •Blogues dentro da plataforma•	Conselhos de um empreendedor. METAS: 1.	Expandir a economia do país e levar esta além fronteiras. 2.	Ajudar a expandir o mercado de emprego, e contribuir na diminuição do desemprego da juventude angolana. 3.	Contribuir um pouco mais na literatura angolana e contribuir nos sonhos de estudantes angolanos escritores, e fornecer um espaço de compartilhamento de planos. FUNCIONALIDADES : Uma plataforma que fornecerá funcionalidades como negociação entre os usuários onde esta mesma negociação estará sob os termos e políticas da plataforma, para efectuar este ato os usuários terão que autenticar suas contas de uma forma segura e de forma a reter dados de ambos e evitar fraudes, em fim, visto que estamos face à pandemia da Covid-19, e a cada dia vem surgindo novos vírus desta mesma família de vírus e já afectou quem sabe uma boa parte do país e do munto inteiro, é bem provável que este não termine tão fácil, no entanto com este teremos de axar meios quer seja tecnológicos ou outros para continuar com os trabalhos para não afectar demais a economia de cada país, com isto viemos propôr esta plataforma( gokside.myartsonline.com ) que de forma segura permitirá trabalhar quer seja em casa ou em algum outro lugar com maior segurança evitando contágios deste vírus mas ajudando e diversificando a economia. Cada jovem sonhador poderá seguir em frente com seus projectos com o nosso suporte, uma vez plataforma de negociação esta mesma terá QUIZ e FAQ do empreendedor, que por sua vez todo usuário que for autenticar sua conta como comercializador/empreendedor com a sua loja virtual receberá ou terá acesso à todos as dicas e conselhos de um empreendedor(conta do conselheiro empreendedor da plataforma) para melhor gestão da mesma caso queira. Nesta mesma plataforma terá por sua vez um espaço para jovens empreendedores criarem suas lojas virtuais e venderem seus produtos com segurança e por consequênte os compradores efetuarem suas compras com segurança, ou ainda funcionará da seguinte maneira como uma opção: o comprador efectua a compra e o vendedor recebrá uma notificação e poderá deixar o produto na nossa empresa e assim sucessivamente o comprador ir pegar o produto na empresa(para maior segurança quando o caso é em Luanda),como também poderão optar por fazê-los pessoalmente por entrega ao domicílio  e facilitando o pessoal que não possui um cartão VISA ou mesmo MASTERCARD poderá pagar com a nossa nota nacional (Kwanza). Outro espaço aplicado a gokside é o espaço “biblioteca”, neste espaço o usuário poderá encontrar e/ou publicar livros do seu gosto ou da sua autoria. Jovens e estudantes que pensam em algum dia escrever algum livro ou um artigo, pois bem, neste espaço estes mesmos poderão realizá-los com uma ajuda da plataforma e comercializá-los na mesma plataforma(face a pandemia evitaremos enchentes em locais amplos).Em suma nesta mesma plataforma o usuário poderá tornar de forma pública seus projetos e momentos desde vídeos, músicas, documentos, aplicativos android, IOS e desktop. Poderá (Usuário) compartilhar frases, criar blogues  sem ser necessário programação alguma,  e tantas outras coisas mais.  PROPOSTA DE VALOR:  1-Reduzir o número de fraudes no  país. 2-plataforma de entretenimento, pois garantirá o bem estar do usuário, acelera a expansão de matéria ou qualquer outro conteúdo submetido na plataforma. 3-acelera o networking do usuário empreendedor e por sua vez o seu negócio.")
    }
  </script>
</body>

</html>