<?php include ("config.php");  ?>
<?php include ("admin/bd/stream.php");  ?>
<?php include ("admin/bd/mural.php");  ?>
<?php include ("admin/bd/tv.php");  ?>
<?php include ("admin/bd/locutores.php");  ?>
<?php include ("admin/bd/top5.php");  ?>
<?php include ("admin/bd/anunciantes.php");  ?>
<?php include ("admin/bd/doacao.php");  ?>
<?php include ("admin/bd/ouvinte.php");  ?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">

<!--=================================
Meta tags
=================================-->
<meta name="description" content="<?php echo $page_desc; ?>">
<meta name="keywords" content="<?php echo $page_words; ?>" />

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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=449626331835385";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

            <li class="active"><a href="home"><?php echo $menu_home; ?></a></li>

            <li class=""><a href="sobre"><?php echo $menu_sobre; ?></i></a></li>

            <li class=""><a href="noticias"><?php echo $menu_noticias; ?></i></a></li>

            <?php  
              if ($mural == 1) {
                echo "<li><a href='mural'>$menu_mural</i></a></li>";
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
      Home
      =================================-->
      <section id="home-slider">
        <div class="container">
          <div class="home-inner">

            <div id="homeSliderNav" class="slider-nav"> 
              <a id="home-prev" href="#" class="prev fa fa-chevron-left"></a>
              <a id="home-next" href="#" class="next fa fa-chevron-right"></a>
              
            </div><!--sliderNav-->
            
            <div id="flex-home" class="flexslider" data-animation="slide" data-animationSpeed="1000" data-autoPlay="true" data-slideshowSpeed="7000">
              <ul class="slides">

             <?php $gallery ="Slider"; include($_SERVER["DOCUMENT_ROOT"]."/admin/includes/gallery.php"); ?>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Player Wraper
      =================================-->
      <div class="rockPlayerHolder"></div>

<div class="clearfix"></div>
      <!--=================================
      Upcoming events
      =================================-->
      
      <section id="updates">
        
            
        <div class="container">


          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

              <h1>Locutor no Ar</h1>
                <?php include ("admin/bd/locutores/$locutor_select"); ?>

              <h1>Peça Sua Música</h1>
              <div class="event-feed">
                <?php include ("admin/bd/$pedido_select"); ?>
                <br/> 
              </div>

              <h1>Ouvinte do Mês</h1>
                              
               <div class="event-feed">
               <h5><?php echo $ouvinte_nome; ?></h5>
               </div>
               <center>
               <img src="admin/assets/img/ouvinte.png" alt="<?php echo $ouvinte_nome; ?>"/></center>

              <center>
               <?php include ("admin/bd/botoes/$ouvface_select"); ?>
              <?php include ("admin/bd/botoes/$ouvtw_select"); ?>
              <?php include ("admin/bd/botoes/$ouvinst_select"); ?>
                
                
               </center>

            <?php  
            	if ($doacao == 1) {
            		echo "<h1>Doação</h1>
                	<center>$msg_doacao
                	<form target=\"_blank\" action=\"https://pagseguro.uol.com.br/checkout/v2/donation.html\" method=\"post\">
					<input type=\"hidden\" name=\"receiverEmail\" value=\"$email_pagseguro\" />
					<input type=\"hidden\" name=\"currency\" value=\"BRL\" />
					<input type=\"hidden\" name=\"iot\" value=\"button\" />
					<input type=\"image\" src=\"assets/img/pagseguro.png\" name=\"submit\" alt=\"Pague com PagSeguro - é rápido, grátis e seguro!\" />
					</form>
               		<br/></center>";
            	}
            ?>
			
            </div>


            <!--latest events-->
            
            <div class="col-lg-6 col-md-6 col-sm-6">

            <?php  
              if ($tv == 1) {
                echo "<h1>$nome_tv</h1> ";
                echo "<center>";
                include_once($_SERVER["DOCUMENT_ROOT"]."/admin/data/pages/camera-estudio.html");
                echo "</center><br/>";
              }
            ?>       	

            	<h1>Últimos Vídeos</h1>
              	<div class="news-feed text-center">
                <div class="row">
              		<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/includes/videos-home.php"); ?>
                  </div>
        			<a href="videos"><h2>Mais Vídeos</h2></a>
              	</div><div class="event-feed"></div>



              	<h1>Últimas Notícias</h1>
                <br/>
                <div class="row">
               		<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/includes/news-list.php"); ?>
              	</div><div class="news-feed text-center"><a href="noticias"><h2>Mais Notícias</h2></a></div>
                <div class="event-feed"></div>


              <h1>Nossa Página</h1>
                <div class="fb-page" 
                  data-href="<?php echo $facebook_url; ?>"
                  data-width="500"
                  data-adapt-container-width="true"
                  data-hide-cover="false"
                  data-show-facepile="true" 
                  data-show-posts="false">
                </div>
             
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
            <h1>Aplicativos</h1>
            <div class="banner-app">
            <?php include ("admin/bd/$apk_select"); ?>
            <?php include ("admin/bd/$ios_select"); ?>
            </div>
          
            <br/>

             <h1>Ouça no Celular</h1>
               <center>
              <?php include ("admin/bd/botoes/$bapk_select"); ?>
              <?php include ("admin/bd/botoes/$bios_select"); ?>
              <?php include ("admin/bd/botoes/$bwin_select"); ?>
              <?php include ("admin/bd/botoes/$bblack_select"); ?>
              </center>
            
            <br/>
              <h1>Top 5</h1>

                
               <center><img class="top5" src="admin/assets/img/artistas/artista1.png" /></center>
               <div class="event-feed2">
               <h3>01.</h3><h5><?php echo $artista_top1; ?></h5>
               <p><?php echo $musica_top1; ?></p>
				<center>
              		<audio id="music" preload="true"><source src="admin/assets/audios/top5/top1.mp3"></audio>
         
				          <div class="aligButton">
  			         	<button id="pButton" class="play" onclick="play()"></button>
				          </div></center>
              </div>

           
               <center><img class="top5" src="admin/assets/img/artistas/artista2.png" /></center>
               <div class="event-feed2">
              <h3>02.</h3><h5><?php echo $artista_top2; ?></h5>
               <p><?php echo $musica_top2; ?></p>
				<center><audio id="music1" preload="true"><source src="admin/assets/audios/top5/top2.mp3"></audio>
				<div class="aligButton">
  				<button id="pButton1" class="play" onclick="play1()"></button>
				</div></center>
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista3.png" /></center>
               <div class="event-feed2">
              <h3>03.</h3><h5><?php echo $artista_top3; ?></h5>
               <p><?php echo $musica_top3; ?></p>
				<center>
				<audio id="music2" preload="true"><source src="admin/assets/audios/top5/top3.mp3"></audio>
				<div class="aligButton">
  				<button id="pButton2" class="play" onclick="play2()"></button>
				</div></center>          
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista4.png" /></center>
               <div class="event-feed2">
              <h3>04.</h3><h5><?php echo $artista_top4; ?></h5>
               <p><?php echo $musica_top4; ?></p>
				<center>
				<audio id="music3" preload="true"><source src="admin/assets/audios/top5/top4.mp3"></audio>
				<div class="aligButton">
  				<button id="pButton3" class="play" onclick="play3()"></button>
				</div></center>
              </div>

               
               <center><img class="top5" src="admin/assets/img/artistas/artista5.png" /></center>
               <div class="event-feed2">
              <h3>05.</h3><h5><?php echo $artista_top5; ?></h5>
               <p><?php echo $musica_top5; ?></p>
				<center>
				<audio id="music4" preload="true"><source src="admin/assets/audios/top5/top5.mp3"></audio>
				<div class="aligButton">
  				<button id="pButton4" class="play" onclick="play4()"></button>
				</div></center>

              
              </div>


<?php  
 if ($mural == 1) {
 echo "<h1>Último Recado</h1>";

global $PHP_SELF;

@$pagina = $_REQUEST['pagina'];
@$exibe = $_REQUEST['exibe'];

if ($pagina == "") {
    $pagina = "1";
}

if ($exibe == "") {
    $exibe = "1";
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
echo "<center><a href='mural'><button type='button' class='btn btn-primary'>Deixe seu recado</button></a></center>";
 }
?>

            </div>
            <!--latest videos--> 
          </div>
        </div>
      </section>
    </div><!--pageContent-->
</div><!--ajaxwrap-->    



<!--=================================
Latest anuncios
=================================-->
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
    
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

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
<script src="admin/plugins/jquery/tracking.js"></script>
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


