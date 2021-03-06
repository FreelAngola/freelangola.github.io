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
   <title>Termos De Uso Gokside</title>
   <script src="../js/jquery.min.js"></script>
   <script src="../js/bootstrap/bootstrap.min.js"></script>
   <link rel="icon" href="../img/blogs-for-freelancers.png" />
   <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="../css/materialize.css">
   <link rel="stylesheet" href="../css/materialize.min.css">
   <style>
      span {

         color: rgb(93, 104, 250);

      }

      .li {

         list-style-type: circle;

      }
   </style>
</head>

<body class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
            <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="correio.php" class="nav-link">correio</a></li>
            <li class="nav-item"><a href="termosdeuso.php" class="nav-link">Termos de uso e regulamentos</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="iniciarsessao.html" class="nav-link">logout</a></li>
         </ul>
      </div>
   </nav>
   <h1 class="card-title"> O Que s??o permitidos no Freelancers Angola?</h1>
   <ul>
      <li class="li">
         O <span> Freelancers Angola </span>?? uma plataforma feita e para os angolanos, cujo o incentivo visa a motivar o povo Angolano a utilizar suas habilidades em prol do seu conhecimento e por sua vez arrecadar fundos significativos. <br> Uma plataforma onde todos os usu??rios disp??es e ocupam fun????es ou seja disp??e um job cujo um Angolan freelancer poder?? resolve-lo caso ambos concordem.
      </li>
      <li class="li">
         Ajuda-nos a manter a startup protegidos de fraudes, phishing e perfis que se fazem passar por outras pessoas de modo a efectuar burlas.
      </li>
      <li class="li">
         A plataforma suporta pagamentos pelo Paypal, transfer??ncia banc??ria, e <a href="e-kwanza.ao">E-Kwanza</a>
      </li>
   </ul>
   <h1> Seu nome n??o pode incluir:</h1>
   <ul>
      <li class="li"> S??mbolos</li>
      <li class="li"> N??meros</li>
      <li class="li">Caracteres desnecess??rias ou emojis</li>
      <li class="li">Pontua????o ou carateres repetitivos;</li>
   </ul>
   <h1>Como Funciona ?</h1>
   <p>A realiza????o dos jobs e pagamentos s??o feitos da seguinte maneira: <br>
   <ol>
      <li class="li">
         O necessitado publica o job a precisa que fa??am com a quantia que est?? disposto a pagar e o prazo de entrega, o freelancer pega o contrato, assinam e o necessitado envia os dados por conseguinte o freelancer termina o job e envia a plataforma. S?? que este artigo ainda n??o estar?? dispon??vel para o poster at?? que seja confirmado o pagamento pelo freelancer, acontece do mesmo modo para com o freelancer, o poster n??o efectuar?? o pagamento enquanto n??o ver o seu trabalho feito na plataforma.
      </li>
      <li class="li">
         Por confian??a ou desconfian??a e evitar burlas ou furtos, os pagamentos podem ser feitos ou depositados na plataforma por <a href="paypal.com"> Paypal</a>, transfer??ncia banc??ria, ou <a href="e-kwanza.ao"> E-Kwanza</a> e s?? depois de ambos confirmarem a plataforma larga o pagamento para o freelancer e o artigo para o poster, ou pode ser feito de modo directo entre ambos do tipo depois do freelancer disponibilisar o artigo feito o poster poder?? enviar o pagamento directamente para o freelancer e o freelancer confirmar na plataforma que j?? foi pago a?? n??s liberamos o artigo e o poster poder?? arrecad??-lo. <br> Mas <strong> att: </strong> <span> Actos como este a plataforma n??o se responsabilisa caso haja desonestidade por parte de algu??m.</span>
      </li>
   </ol>
   </p>
   <ul>
      <h1>Aten????o: </h1>
      <p>
         Quaisquer assuntos que forem resolvidos fora da plataforma n??o ser?? resolvida dentro dela, no caso de fazer uma negocia????o fora da plataforma e ocorer por exemplo burla, n??o nos responsabilizaremos por isso.
      </p>
      <ul>
         <li class="li"> Os perfis destinam-se apenas a utiliza????o individual.</li>
         <li class="li"> Podes criar um job ou mesmo encontr??-los no Dashboard.</li>
         <li class="li">
            <span>Apartir do momento em que criou sua conta, ter?? que possuir uma conta banc??ria e para isto a nossa plataforma utilisa o <a href="e-kwanza">E - Kwanza</a> cujo em minutos recebes uma sms para a cria????oo da mesma .</span>
         </li>
      </ul>
      <p> N??o ?? permitido algu??m fazer-se passar por outra pessoa ou qualquer outra entidade.</p>
      <h4> Nota:</h4>
      <p>
         Se o teu nome segue os nossos padr??es e continuas com problemas em alter??-lo, descubre porqu??. <br> O freelancer Angola tem o <span class="plano"><a href="#"> Plano +</a> </span> , plano que facilita o utilizador na sua filtragem de pesquisa, isto ??, jobs dispon??veis cujo os requisitos v??o de acordo com as suas compet??ncias ent??o este cair?? em primeira m??o em forma de mensagem, isto ??, n??s coletamos ou reservamos para s?? com custo adicional de 2% do pagamento, e caso largue ou esteja sem interesse nele ser?? publicado no dashboard. <br>

         <br> A plataforma possum um atributo <span>Classifica????o</span>, quanto ao numero de jobs realisados os oponentes poder??o classificar te de acordo como trabalho feito e isso aumentar?? sua credibilidade e confian??a.

         Sendo principiante na plataforma e sem classifica????es ainda os pre??os devem variar ainda de <span>1.000 Kzs (Mil kwanzas)</span> ?? <span>3.000 Kzs (Tr??s mil kwanzas)</span> para jobs ligeiros, e de <span>3.000 Kzs (Tr??s mil kwanzas)</span> ?? <span>10.000 Kzs (Dez mil kwanzas)</span> para jobs profissionais. ap??s ter sido classificado por outros usu??rios poder?? acrescentar seus pre????rios! <br>

         Caso notemos que sejas um principiante e infringires com o regulamento ser??s banido da plataforma.
      </p>
</body>

</html>