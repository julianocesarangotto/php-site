<?php include ("config.php");  ?>
<?php include ("admin/bd/stream.php");  ?>
<?php include ("admin/bd/locutores.php");  ?>
<?php include ("admin/bd/mural.php");  ?>
<?php include ("admin/bd/top5.php");  ?>
<?php include ("admin/bd/anunciantes.php");  ?>
<?php include ("admin/bd/programacao.php");  ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $page_title; ?> - <?php echo $menu_contato; ?></title>

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
<link rel="stylesheet" href="assets/css/tabs.css">
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
                echo "<li><a href='mural'>$menu_mural</i></a></li>";
              }
            ?>

            <li class=""><a href="programacao"><?php echo $menu_programacao; ?></i></a></li>

            <li class=""><a href="eventos"><?php echo $menu_eventos; ?></a></li>

            <li class=""><a href="fotos"><?php echo $menu_fotos; ?></a></li>

            <li class=""><a href="videos"><?php echo $menu_videos; ?></a></li>

            <li class=""><a href="equipe"><?php echo $menu_equipe; ?></a></li>

            <li class="active"><a href="contato"><?php echo $menu_contato; ?></a></li>

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
                          <h1><?php echo $menu_contato; ?></h1>
                          <h5>Entre em contato conosco</h5>
                      </div>
                  </div>
             </div>
        </section>
        <div class="clearfix"></div>
      
      
      <!--=================================
      Upcoming events
      =================================-->
      
            <section id="contact">
          <div class="container">
              <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-9">
                     
                      <form id="contactform" action="assets/php/submit.php" method="post">
                          <div class="row">
                              <div class="col-lg-5 col-md-5 col-sm-5">
                                  <h5>Nome:</h5>
                                  <input type="text" id="name" />
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-5">
                                  <h5>E-mail:</h5>
                                   <input type="text" name="email" id="email" />
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                  <h5>Mensagem:</h5>
                                  <textarea name="message" id="message"></textarea>
                              </div>
                          </div>
                          <button id="submit1" type="submit">Enviar</button>
                      </form>
                      <div id="valid-issue" style="display:none;"> Por favor, forneça informações válidas</div>   
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3">
                      <h3>Informações</h3>
                      <i class="fa fa-whatsapp fa-2x"></i>
                      <p><?php echo $nub_whatsapp; ?></p>
                      <b class=" fa fa-envelope"></b>
                      <p><?php echo $email_contact; ?></p>

                      <br/>
<p><?php echo $page_title; ?></p>
        <p><?php echo $page_desc; ?></p>
        <p>Todos os direitos reservados.</p>
        <a href="<?php echo $facebook_url; ?>" target="_bank"><i class="fa fa-facebook fa-2x"></i></a> 
        <a href="<?php echo $twitter_url; ?>" target="_bank"><i class="fa fa-twitter fa-2x"></i></a> 
        <a href="<?php echo $youtube_url; ?>" target="_bank"><i class="fa fa-youtube fa-2x"></i></a> 
        <a href="<?php echo $google_url; ?>" target="_bank"><i class="fa fa-google-plus fa-2x"></i></a> 
        <a href="<?php echo $instagram_url; ?>" target="_bank"><i class="fa fa-instagram fa-2x"></i></a>

      
                  </div>
              </div><!--row-->
          </div><!--//container-->  
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
