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
<title><?php echo $page_title; ?> - <?php echo $menu_programacao; ?></title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

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

            <li class="active"><a href="programacao"><?php echo $menu_programacao; ?></i></a></li>

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
                          <h1><?php echo $menu_programacao; ?></h1>
                          <h5>Nossa Programação</h5>
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

                          
                          <article class="">
                          <h4><ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#seg">Segunda</a></li>
  <li><a data-toggle="tab" href="#ter">Terça</a></li>
  <li><a data-toggle="tab" href="#qua">Quarta</a></li>
  <li><a data-toggle="tab" href="#qui">Quinta</a></li>
  <li><a data-toggle="tab" href="#sex">Sexta</a></li>
  <li><a data-toggle="tab" href="#sab">Sábado</a></li>
  <li><a data-toggle="tab" href="#dom">Domingo</a></li>
  
</ul></h4>

<div class="tab-content">
  <div id="seg" class="tab-pane fade in active">
 <table>
    <thead>
      <tr>
        <th>Horário</th>
        <th>Programa</th>
        <th>Apresentador</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $seg_h1; ?></td>
        <td><?php echo $seg_p1; ?></td>
        <td><?php echo $seg_a1; ?></td>
      </tr>
      <tr>
        <td><?php echo $seg_h2; ?></td>
        <td><?php echo $seg_p2; ?></td>
        <td><?php echo $seg_a2; ?></td>
      </tr>
      <tr>
        <td><?php echo $seg_h3; ?></td>
        <td><?php echo $seg_p3; ?></td>
        <td><?php echo $seg_a3; ?></td>
      </tr>
            <tr>
        <td><?php echo $seg_h4; ?></td>
        <td><?php echo $seg_p4; ?></td>
        <td><?php echo $seg_a4; ?></td>
      </tr>
            <tr>
        <td><?php echo $seg_h5; ?></td>
        <td><?php echo $seg_p5; ?></td>
        <td><?php echo $seg_a5; ?></td>
      </tr>
            <tr>
        <td><?php echo $seg_h6; ?></td>
        <td><?php echo $seg_p6; ?></td>
        <td><?php echo $seg_a6; ?></td>
      </tr>
      <tr>
        <td><?php echo $seg_h7; ?></td>
        <td><?php echo $seg_p7; ?></td>
        <td><?php echo $seg_a7; ?></td>
      </tr>
      <tr>
        <td><?php echo $seg_h8; ?></td>
        <td><?php echo $seg_p8; ?></td>
        <td><?php echo $seg_a8; ?></td>
      </tr>
            <tr>
        <td><?php echo $seg_h9; ?></td>
        <td><?php echo $seg_p9; ?></td>
        <td><?php echo $seg_a9; ?></td>
      </tr>
      <tr>
        <td><?php echo $seg_h10; ?></td>
        <td><?php echo $seg_p10; ?></td>
        <td><?php echo $seg_a10; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="ter" class="tab-pane fade">
 <table>
    <thead>
      <tr>
        <th>Horário</th>
        <th>Programa</th>
        <th>Apresentador</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $ter_h1; ?></td>
        <td><?php echo $ter_p1; ?></td>
        <td><?php echo $ter_a1; ?></td>
      </tr>
      <tr>
        <td><?php echo $ter_h2; ?></td>
        <td><?php echo $ter_p2; ?></td>
        <td><?php echo $ter_a2; ?></td>
      </tr>
      <tr>
        <td><?php echo $ter_h3; ?></td>
        <td><?php echo $ter_p3; ?></td>
        <td><?php echo $ter_a3; ?></td>
      </tr>
            <tr>
        <td><?php echo $ter_h4; ?></td>
        <td><?php echo $ter_p4; ?></td>
        <td><?php echo $ter_a4; ?></td>
      </tr>
            <tr>
        <td><?php echo $ter_h5; ?></td>
        <td><?php echo $ter_p5; ?></td>
        <td><?php echo $ter_a5; ?></td>
      </tr>
            <tr>
        <td><?php echo $ter_h6; ?></td>
        <td><?php echo $ter_p6; ?></td>
        <td><?php echo $ter_a6; ?></td>
      </tr>
      <tr>
        <td><?php echo $ter_h7; ?></td>
        <td><?php echo $ter_p7; ?></td>
        <td><?php echo $ter_a7; ?></td>
      </tr>
      <tr>
        <td><?php echo $ter_h8; ?></td>
        <td><?php echo $ter_p8; ?></td>
        <td><?php echo $ter_a8; ?></td>
      </tr>
            <tr>
        <td><?php echo $ter_h9; ?></td>
        <td><?php echo $ter_p9; ?></td>
        <td><?php echo $ter_a9; ?></td>
      </tr>
      <tr>
        <td><?php echo $ter_h10; ?></td>
        <td><?php echo $ter_p10; ?></td>
        <td><?php echo $ter_a10; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="qua" class="tab-pane fade">
 <table>
    <thead>
      <tr>
        <th>Horário</th>
        <th>Programa</th>
        <th>Apresentador</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $qua_h1; ?></td>
        <td><?php echo $qua_p1; ?></td>
        <td><?php echo $qua_a1; ?></td>
      </tr>
      <tr>
        <td><?php echo $qua_h2; ?></td>
        <td><?php echo $qua_p2; ?></td>
        <td><?php echo $qua_a2; ?></td>
      </tr>
      <tr>
        <td><?php echo $qua_h3; ?></td>
        <td><?php echo $qua_p3; ?></td>
        <td><?php echo $qua_a3; ?></td>
      </tr>
            <tr>
        <td><?php echo $qua_h4; ?></td>
        <td><?php echo $qua_p4; ?></td>
        <td><?php echo $qua_a4; ?></td>
      </tr>
            <tr>
        <td><?php echo $qua_h5; ?></td>
        <td><?php echo $qua_p5; ?></td>
        <td><?php echo $qua_a5; ?></td>
      </tr>
            <tr>
        <td><?php echo $qua_h6; ?></td>
        <td><?php echo $qua_p6; ?></td>
        <td><?php echo $qua_a6; ?></td>
      </tr>
      <tr>
        <td><?php echo $qua_h7; ?></td>
        <td><?php echo $qua_p7; ?></td>
        <td><?php echo $qua_a7; ?></td>
      </tr>
      <tr>
        <td><?php echo $qua_h8; ?></td>
        <td><?php echo $qua_p8; ?></td>
        <td><?php echo $qua_a8; ?></td>
      </tr>
            <tr>
        <td><?php echo $qua_h9; ?></td>
        <td><?php echo $qua_p9; ?></td>
        <td><?php echo $qua_a9; ?></td>
      </tr>
      <tr>
        <td><?php echo $qua_h10; ?></td>
        <td><?php echo $qua_p10; ?></td>
        <td><?php echo $qua_a10; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="qui" class="tab-pane fade">
 <table>
    <thead>
      <tr>
        <th>Horário</th>
        <th>Programa</th>
        <th>Apresentador</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $qui_h1; ?></td>
        <td><?php echo $qui_p1; ?></td>
        <td><?php echo $qui_a1; ?></td>
      </tr>
      <tr>
        <td><?php echo $qui_h2; ?></td>
        <td><?php echo $qui_p2; ?></td>
        <td><?php echo $qui_a2; ?></td>
      </tr>
      <tr>
        <td><?php echo $qui_h3; ?></td>
        <td><?php echo $qui_p3; ?></td>
        <td><?php echo $qui_a3; ?></td>
      </tr>
            <tr>
        <td><?php echo $qui_h4; ?></td>
        <td><?php echo $qui_p4; ?></td>
        <td><?php echo $qui_a4; ?></td>
      </tr>
            <tr>
        <td><?php echo $qui_h5; ?></td>
        <td><?php echo $qui_p5; ?></td>
        <td><?php echo $qui_a5; ?></td>
      </tr>
            <tr>
        <td><?php echo $qui_h6; ?></td>
        <td><?php echo $qui_p6; ?></td>
        <td><?php echo $qui_a6; ?></td>
      </tr>
      <tr>
        <td><?php echo $qui_h7; ?></td>
        <td><?php echo $qui_p7; ?></td>
        <td><?php echo $qui_a7; ?></td>
      </tr>
      <tr>
        <td><?php echo $qui_h8; ?></td>
        <td><?php echo $qui_p8; ?></td>
        <td><?php echo $qui_a8; ?></td>
      </tr>
            <tr>
        <td><?php echo $qui_h9; ?></td>
        <td><?php echo $qui_p9; ?></td>
        <td><?php echo $qui_a9; ?></td>
      </tr>
      <tr>
        <td><?php echo $qui_h10; ?></td>
        <td><?php echo $qui_p10; ?></td>
        <td><?php echo $qui_a10; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="sex" class="tab-pane fade">
 <table>
    <thead>
      <tr>
        <th>Horário</th>
        <th>Programa</th>
        <th>Apresentador</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $sex_h1; ?></td>
        <td><?php echo $sex_p1; ?></td>
        <td><?php echo $sex_a1; ?></td>
      </tr>
      <tr>
        <td><?php echo $sex_h2; ?></td>
        <td><?php echo $sex_p2; ?></td>
        <td><?php echo $sex_a2; ?></td>
      </tr>
      <tr>
        <td><?php echo $sex_h3; ?></td>
        <td><?php echo $sex_p3; ?></td>
        <td><?php echo $sex_a3; ?></td>
      </tr>
            <tr>
        <td><?php echo $sex_h4; ?></td>
        <td><?php echo $sex_p4; ?></td>
        <td><?php echo $sex_a4; ?></td>
      </tr>
            <tr>
        <td><?php echo $sex_h5; ?></td>
        <td><?php echo $sex_p5; ?></td>
        <td><?php echo $sex_a5; ?></td>
      </tr>
            <tr>
        <td><?php echo $sex_h6; ?></td>
        <td><?php echo $sex_p6; ?></td>
        <td><?php echo $sex_a6; ?></td>
      </tr>
      <tr>
        <td><?php echo $sex_h7; ?></td>
        <td><?php echo $sex_p7; ?></td>
        <td><?php echo $sex_a7; ?></td>
      </tr>
      <tr>
        <td><?php echo $sex_h8; ?></td>
        <td><?php echo $sex_p8; ?></td>
        <td><?php echo $sex_a8; ?></td>
      </tr>
            <tr>
        <td><?php echo $sex_h9; ?></td>
        <td><?php echo $sex_p9; ?></td>
        <td><?php echo $sex_a9; ?></td>
      </tr>
      <tr>
        <td><?php echo $sex_h10; ?></td>
        <td><?php echo $sex_p10; ?></td>
        <td><?php echo $sex_a10; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="sab" class="tab-pane fade">
 <table>
    <thead>
      <tr>
        <th>Horário</th>
        <th>Programa</th>
        <th>Apresentador</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $sab_h1; ?></td>
        <td><?php echo $sab_p1; ?></td>
        <td><?php echo $sab_a1; ?></td>
      </tr>
      <tr>
        <td><?php echo $sab_h2; ?></td>
        <td><?php echo $sab_p2; ?></td>
        <td><?php echo $sab_a2; ?></td>
      </tr>
      <tr>
        <td><?php echo $sab_h3; ?></td>
        <td><?php echo $sab_p3; ?></td>
        <td><?php echo $sab_a3; ?></td>
      </tr>
            <tr>
        <td><?php echo $sab_h4; ?></td>
        <td><?php echo $sab_p4; ?></td>
        <td><?php echo $sab_a4; ?></td>
      </tr>
            <tr>
        <td><?php echo $sab_h5; ?></td>
        <td><?php echo $sab_p5; ?></td>
        <td><?php echo $sab_a5; ?></td>
      </tr>
            <tr>
        <td><?php echo $sab_h6; ?></td>
        <td><?php echo $sab_p6; ?></td>
        <td><?php echo $sab_a6; ?></td>
      </tr>
      <tr>
        <td><?php echo $sab_h7; ?></td>
        <td><?php echo $sab_p7; ?></td>
        <td><?php echo $sab_a7; ?></td>
      </tr>
      <tr>
        <td><?php echo $sab_h8; ?></td>
        <td><?php echo $sab_p8; ?></td>
        <td><?php echo $sab_a8; ?></td>
      </tr>
            <tr>
        <td><?php echo $sab_h9; ?></td>
        <td><?php echo $sab_p9; ?></td>
        <td><?php echo $sab_a9; ?></td>
      </tr>
      <tr>
        <td><?php echo $sab_h10; ?></td>
        <td><?php echo $sab_p10; ?></td>
        <td><?php echo $sab_a10; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="dom" class="tab-pane fade">
 <table>
    <thead>
      <tr>
        <th>Horário</th>
        <th>Programa</th>
        <th>Apresentador</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $dom_h1; ?></td>
        <td><?php echo $dom_p1; ?></td>
        <td><?php echo $dom_a1; ?></td>
      </tr>
      <tr>
        <td><?php echo $dom_h2; ?></td>
        <td><?php echo $dom_p2; ?></td>
        <td><?php echo $dom_a2; ?></td>
      </tr>
      <tr>
        <td><?php echo $dom_h3; ?></td>
        <td><?php echo $dom_p3; ?></td>
        <td><?php echo $dom_a3; ?></td>
      </tr>
            <tr>
        <td><?php echo $dom_h4; ?></td>
        <td><?php echo $dom_p4; ?></td>
        <td><?php echo $dom_a4; ?></td>
      </tr>
            <tr>
        <td><?php echo $dom_h5; ?></td>
        <td><?php echo $dom_p5; ?></td>
        <td><?php echo $dom_a5; ?></td>
      </tr>
            <tr>
        <td><?php echo $dom_h6; ?></td>
        <td><?php echo $dom_p6; ?></td>
        <td><?php echo $dom_a6; ?></td>
      </tr>
      <tr>
        <td><?php echo $dom_h7; ?></td>
        <td><?php echo $dom_p7; ?></td>
        <td><?php echo $dom_a7; ?></td>
      </tr>
      <tr>
        <td><?php echo $dom_h8; ?></td>
        <td><?php echo $dom_p8; ?></td>
        <td><?php echo $dom_a8; ?></td>
      </tr>
            <tr>
        <td><?php echo $dom_h9; ?></td>
        <td><?php echo $dom_p9; ?></td>
        <td><?php echo $dom_a9; ?></td>
      </tr>
      <tr>
        <td><?php echo $dom_h10; ?></td>
        <td><?php echo $dom_p10; ?></td>
        <td><?php echo $dom_a10; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>            

                          </article><!--\\latest post-->
                          
                    
                  </div><!--latest news-->
                  
                  
            <div class="col-lg-3 col-md-3 col-sm-3">
            <h1>Aplicativos</h1>
            <div class="banner-app">
            <?php include ("admin/bd/$apk_select"); ?>
            <?php include ("admin/bd/$ios_select"); ?>
            </div>
            
            <br/>
<div class="event-feed">
<h1>Peça Sua Música</h1>
<?php include ("admin/bd/$pedido_select"); ?> 
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
