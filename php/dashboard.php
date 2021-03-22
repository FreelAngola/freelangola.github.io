
<?php
session_start();
include_once('header.php');
?>

<?php
   if((!isset($_SESSION['telefone'])== true) || (!isset ($_SESSION['pass'])==true)){
           unset($_SESSION['telefone']);
       unset( $_SESSION['pp']);
       
      
       
       }
       
      
   
    ?>
    
    <!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="materialize/css/materialize.css">

<link rel="stylesheet" href="materialize/css/materialize.min.css">

    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/owl.carousel.css">
    <link rel="stylesheet" href="csss/owl.theme.css">
    <link rel="stylesheet" href="csss/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="csss/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="csss/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="csss/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="jss/vendor/modernizr-2.8.3.min.js"></script>
</head>

<style>
@media screen and (min-width:992px) {
 /* Assign multiple styles in here for screens larger than 991px */
 #element-1 {
 font-size:10px;
 }
 .klass-1 {
 font-size:20px;
 }
} 
.titulo{
    margin:0;
}
#svg{
   float:left;
   
}
</style>
<body>
   

 <h1 class="titulo"><center><a href="painel.php"><svg id="svg" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a> Encontre Freelancers e Jobs</center></h1>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
            <!-- Mobile Menu start -->
           
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Pesquise freelancers..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php

        $consulta = "SELECT * FROM cadastrados"; 
   $resultado =  $mysqli_connection->query($consulta ); 
   while($dado = mysqli_fetch_array($resultado)){  
      $log= $dado['nome'];
      $provincia= $dado['provincia'];
      $municipio= $dado['municipio'];
      $habilidades= $dado['habilidades'];
      $email= $dado['email'];
      $tel= $dado['tel'];
      $id= $dado['id'];

?>

        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                                <div class="social-media-in">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <img alt="logo" width="30%" heigh="30%" class="img-circle m-b" src="img/blogs-for-freelancers.png">
                                <h3><a href=""><?=$log?></a></h3>
                                <p class="all-pro-ad"><?php echo $provincia.",".$municipio?></p>
                                <p>
                                   <?=$habilidades?>
                                       </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Star: </span> <br><strong> 0    </strong></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Críticas: </span> <strong>0    </strong></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>feitos: </span> <strong>0    </strong></div>
                                        </div><button  class="btn btn-md btn-success"> <a href="perfil.php?usuarionumb=<?=$id?>">Contratar</a></button> 

                                </div>
                            </div>
                        </div>
                    </div> <?php }?>
    <!-- jquery
		============================================ -->
    <script src="jss/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="jss/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="jss/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="jss/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="jss/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="jss/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="jss/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="jss/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="jss/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="jss/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="jss/metisMenu/metisMenu.min.js"></script>
    <script src="jss/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="jss/sparkline/jquery.sparkline.min.js"></script>
    <script src="jss/sparkline/jquery.charts-sparkline.js"></script>
    <script src="jss/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="jss/calendar/moment.min.js"></script>
    <script src="jss/calendar/fullcalendar.min.js"></script>
    <script src="jss/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="jss/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="jss/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="jss/tawk-chat.js"></script>
</body>

</html>