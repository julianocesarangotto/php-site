		<?php
		if (isset($_POST['enviar'])){
		    $arquivo = "admin/bd/recados.php";
		    $newline =
		    "<li style='width:100%;'><div class='well'><i class='fa fa-user fa-3x pull-left' style='margin-right: .2em; color: #5e5e5e;'></i><strong style='font-size: 24px; color:#000;'> ". $_POST['nome']."</strong><br/><small style='color: #5e5e5e;'>". $_POST['cidade']."</small><div class='pull-right data' style='color: #5e5e5e;'><small>". date('d/m/Y - H:i:s')."</small></div><hr style='margin-top:8px; margin-bottom:8px; border-bottom:0px;'><p style=' color:#000;'>". $_POST['recado']."</p></div></li>
";
		    $open = fopen($arquivo,"a+");
		    $write = fwrite($open,$newline);
		}
		?>


<?php include ("config.php");  ?>
<?php include ("admin/bd/stream.php");  ?>
<?php include ("admin/bd/mural.php");  ?>
<?php include ("admin/bd/locutores.php");  ?>
<?php include ("admin/bd/top5.php");  ?>
<?php include ("admin/bd/anunciantes.php");  ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $page_title; ?> - <?php echo $menu_mural; ?></title>

<!--=================================
Meta tags
=================================-->
<meta name="description" content="<?php echo $page_desc; ?>">
<meta name="keywords" content="<?php echo $page_words; ?>" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

<!-- Favicon --> 
<link rel="icon" href="admin/assets/img/favicon.jpg">
<link rel="shortcut icon" href="admin/assets/img/favicon.jpg" />

<!--=================================
Style Sheets
=================================-->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.vegas.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/css/<?php echo $corsite; ?>.css">
	

<script async  src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script defer  src="assets/js/jquery.js"></script>

</head>
<body>

<!--=================================
  Header
  =================================-->
<header>
  <nav class="navbar yamm navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle fa fa-navicon"></button>
        <a class="navbar-brand" href="home">
            <img src="admin/assets/img/logo.png" alt="logo" />
        </a>
      </div>
      <div class="nav_wrapper">
        <div class="nav_scroll">
          
          <ul class="nav navbar-nav">

            <li class=""><a href="home"><?php echo $menu_home; ?></a></li>

            <li class=""><a href="sobre"><?php echo $menu_sobre; ?></i></a></li>

            <li class=""><a href="noticias"><?php echo $menu_noticias; ?></i></a></li>

            <?php  
              if ($mural == 1) {
                echo "<li class='active'><a href='mural'>$menu_mural</i></a></li>";
              }
            ?>

            <li class=""><a href="programacao"><?php echo $menu_programacao; ?></i></a></li>

            <li class=""><a href="eventos"><?php echo $menu_eventos; ?></a></li>

            <li class=""><a href="fotos"><?php echo $menu_fotos; ?></a></li>

            <li class=""><a href="videos"><?php echo $menu_videos; ?></a></li>

            <li class=""><a href="equipe"><?php echo $menu_equipe; ?></a></li>

            <li class=""><a href="contato"><?php echo $menu_contato; ?></a></li>

          </ul>
        </div>
        <!--/.nav-collapse --> 
        
      </div>
    </div>
  </nav>
</header>

<!--=================================
Vegas Slider Images
=================================-->

<ul class="vegas-slides hidden">
<?php $gallery ="Bg"; include($_SERVER["DOCUMENT_ROOT"]."/admin/includes/gallery-bg.php"); ?> 
</ul>



<!--=================================
JPlayer (Audio Player)
=================================-->


<div id="ajaxArea">
    <div class="pageContentArea">
      <!--=================================
      bread crums
      =================================-->
        <section class="breadcrumb">
             <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <h1>Mural de Recados</h1>
                          <h5>Recados</h5>
                      </div>
                  </div>
             </div>
        </section>
        <div class="clearfix"></div>
      
      
      <!--=================================
      Upcoming events
      =================================-->
      
      <section id="updates">
          <div class="container">
              <div class="row">
                  
      
                  <div class="col-lg-9 col-md-9 col-sm-9">

                          
                          <article class="latest-post">

  <!-- Trigger the modal with a button -->
  <center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Deixe seu recado</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <br/><br/><br/>
          <h4 class="modal-title" style="color:#000;">Deixe Seu Recado</h4>
        </div>
        <div class="modal-body">
          <section id="contact" >
 						<form action="mural.php" method="post" >
                                  <h5 style="color:#000;">Nome:</h5>
                                  <input type="text" id="nome" name="nome" required />
                                  <h5 style="color:#000;">Cidade:</h5>
                                  <input type="text" id="cidade" name="cidade" required />
                                  <h5 style="color:#000;">Recado:</h5>
                                  <textarea name="recado" id="message" required></textarea>
                              <br/>
                       <center>
                          <button id="submit1" type="submit" name="enviar">Enviar</button>
<br/><br/>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        
                          </center>
                                  
                      </form>
                      <div id="valid-issue" style="display:none;"> Por favor, forneça informações válidas</div>   
 </section>
        </div>

      </div>
      
    </div>
  </div>


<br/>


<?php

global $PHP_SELF;

@$pagina = $_REQUEST['pagina'];
@$exibe = $_REQUEST['exibe'];

if ($pagina == "") {
    $pagina = "1";
}

if ($exibe == "") {
    $exibe = "$mural_pag";
}

$arquivo_linhas = array_reverse(file("admin/bd/recados.php"));
$conta_linhas = count($arquivo_linhas);
$total_paginas = ceil(($conta_linhas/$exibe));

$linha_chegar = (($pagina-1)*$exibe);

for ($linha = 0; $linha != $linha_chegar; $linha++) {
    list ($num_linha, $conteudo_linha) = each ($arquivo_linhas);
}

$ultima_linha = ($linha_chegar + $exibe);
if ($ultima_linha > $conta_linhas) {
    $ultima_linha = $conta_linhas;
}
$parar = "não";
while ($parar == "não") {
    list ($numlinha, $conteudolinha) = each ($arquivo_linhas);
    echo $conteudolinha;

    if (($numlinha + 1) == $ultima_linha) {
        $parar = "sim";
    }
}


?>



    <ul class='news-feed-btn'>
    <?php
    $navegacao = 1;

    while ($navegacao <= $total_paginas) {
        if ($navegacao != $pagina) {
        echo '<li><a href="'.$PHP_SELF.'?pagina='.$navegacao.'"> '.$navegacao.' </a></li>';
        }
        $navegacao++;
    }
    ?>

    </ul>



                          </article><!--\\latest post-->
                          
                    
                  </div><!--latest news-->
                  
                  
            <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="banner-app">
            <h1>Aplicativos</h1>
            <?php include ("admin/bd/$apk_select"); ?>
            <?php include ("admin/bd/$ios_select"); ?>
            </div>
            
            <br/>

            <h1> Locutor Ao vivo</h1>


<?php include ("admin/bd/locutores/$locutor_select"); ?>

<div class="event-feed">
<h1>Peça Sua Música</h1>
<?php include ("admin/bd/$pedido_select"); ?> 
</div>
<br/>
              <h1>Top 5</h1>

     <center><img class="top5" src="admin/assets/img/artistas/artista1.png" /></center>
               <div class="event-feed2">
               
              <h3>01.</h3><h5><?php echo $artista_top1; ?></h5>
               <p><?php echo $musica_top1; ?></p>
                  <center><audio id="music" preload="true">
                  <source src="<?php echo $url1_mp3; ?>">
                 </audio>
                      <div class="aligButton">
                  <button id="pButton" class="play" onclick="play()"></button>
                  </div></center>
              </div>

           
               <center><img class="top5" src="admin/assets/img/artistas/artista2.png" /></center>
               <div class="event-feed2">
              <h3>02.</h3><h5><?php echo $artista_top2; ?></h5>
               <p><?php echo $musica_top2; ?></p>
        <center><audio id="music1" preload="true">
          <source src="<?php echo $url2_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton1" class="play" onclick="play1()"></button>
        </div></center>
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista3.png" /></center>
               <div class="event-feed2">
              <h3>03.</h3><h5><?php echo $artista_top3; ?></h5>
               <p><?php echo $musica_top3; ?></p>
        <center><audio id="music2" preload="true">
          <source src="<?php echo $url3_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton2" class="play" onclick="play2()"></button>
        </div></center>          
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista4.png" /></center>
               <div class="event-feed2">
              <h3>04.</h3><h5><?php echo $artista_top4; ?></h5>
               <p><?php echo $musica_top4; ?></p>
        <center><audio id="music3" preload="true">
          <source src="<?php echo $url4_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton3" class="play" onclick="play3()"></button>
        </div></center>
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista5.png" /></center>
               <div class="event-feed2">
              <h3>05.</h3><h5><?php echo $artista_top5; ?></h5>
               <p><?php echo $musica_top5; ?></p>
        <center><audio id="music4" preload="true">
          <source src="<?php echo $url5_mp3; ?>">
        </audio>
        <div class="aligButton">
          <button id="pButton4" class="play" onclick="play4()"></button>
        </div></center>
              </div>
              
            </div>
              </div>
          </div>    
      </section>
  </div><!--pageContent-->
</div><!--ajaxwrap-->    

<?php include ("anuncios.php");  ?>


<!--=================================
  Footer
  =================================-->
<?php include ("rodape.php");  ?>

<!--=================================
Script Source
=================================--> 
<script defer  src="stopExecutionOnTimeout"></script>
<script defer  src="assets/js/playtop5.js"></script>

<script defer  src="assets/js/bootstrap.min.js"></script>
<script defer  src="assets/js/jquery.easing-1.3.pack.js"></script>
<script defer  src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script defer  src="assets/js/jquery.mousewheel.min.js"></script> 
<script defer  src="assets/js/jflickrfeed.min.js"></script> 
<script defer  src="assets/js/jquery.flexslider-min.js"></script> 
<script defer  src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script> 
<script defer  src="assets/js/tweetie.min.js"></script> 
<script defer  src="assets/js/jquery.prettyPhoto.js"></script> 
<script defer  src="assets/jPlayer/jquery.jplayer.min.js"></script> 
<script defer  src="assets/jPlayer/add-on/jplayer.playlist.min.js"></script> 
<script defer  src="assets/js/jquery.vegas.min.js"></script> 
<script defer  src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> 
<script defer  src="assets/js/jquery.calendar-widget.js"></script> 
<script defer  src="assets/js/isotope.js"></script>
<script defer  src="assets/js/main.js"></script>  

	</script>
	
		<script src="/admin/includes/tracker.php?uri=<?php echo $_SERVER['REQUEST_URI']; ?>&ref=<?php echo $_SERVER['HTTP_REFERER']; ?>"></script>
		<script type="text/javascript">

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', '<?php echo $analytics_id; ?>']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

</script>

</body>
</html>
