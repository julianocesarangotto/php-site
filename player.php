<?php include ("config.php");  ?>
<?php include ("admin/bd/player.php");  ?>
<?php include ("admin/bd/stream.php");  ?>
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
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
  <link rel="icon" href="admin/assets/img/favicon.jpg">
  <link rel="shortcut icon" href="admin/assets/img/favicon.jpg" />
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

  <style type="text/css">
    #audio-player {
  position: <?php echo $pos_player ?>;
  width: 100%;
    height: 65px;
  left: -17px;
  border-top: #e62948 solid 2px;
  border-bottom: #e62948 solid 2px;
  bottom: 0;
  z-index: 9999;
  transition: all .2s ease-in-out;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  background: <?php echo $back_player ?>;
}
  </style>
  <link rel="stylesheet" href="assets/css/main.css">

  <link rel="stylesheet" type="text/css" href="assets/css/<?php echo $corsite; ?>.css">
  <?php if ($pos_player == "fixed") {
    echo "<style> 
    #audio-player{
    
    border-bottom: none;
  }
    </style>";
  }else{
    echo "<style> 
    #audio-player{
    border-top: none;
  }
    </style>";

    } ?>


  <script async  src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script defer  src="assets/js/jquery.js"></script>


</head>
<body>

<section id="audio-player">

  <div class="container">
    <div class="rock-player">
      <div class="playListTrigger">
        <!--<a href="#"><i class="fa fa-list"></i></a>-->
      </div><!--triggerPlayList in responsive-->
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

              <div id="player-instance" class="jp-jplayer"></div>
              <div class="controls">
                
                <div  class="play-pause jp-play"></div>
                <div  class="play-pause jp-pause" style="display:none"></div>

                <div class="jp-volume-controls">
				          <button class="jp-mute" role="button" tabindex="0">mute</button>
				          <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				          <div class="jp-volume-bar">
					         <div class="jp-volume-bar-value"></div>
				          </div>
			         </div>
                
              </div>

              <!--controls--> 
            </div>

            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">

              <div class="player-status">

                <h5 class="audio-title"></h5>
                <div class="audio-timer"><span class="current-time jp-current-time">00:00</span> / <span class="total-time jp-duration">0:00</span></div>
               
              </div>
              <!--player-status--> 
            </div><!--column-->

            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">

              <div class="player-social">
              
              <?php include ("admin/bd/botoes/$bapk_select"); ?>
              <?php include ("admin/bd/botoes/$bios_select"); ?>
              <?php include ("admin/bd/botoes/$bwin_select"); ?>
              <?php include ("admin/bd/botoes/$bblack_select"); ?>
              
               
              </div>
              <!--player-status--> 
            </div><!--column-->


          </div>
          <!--inner-row--> 
        </div>
        <!--column-->
        
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="audio-list">
            <div class="audio-list-icon"></div>
            <div class="jp-playlist"> 
              <!--Add Songs In mp3 formate here-->
              <ul class="hidden playlist-files">
                <li data-title="<?php echo $nome_stream; ?>" 
                
                
                data-artist="<iframe src='admin/bd/locutores-player/<?php echo $locutor_select; ?>' scrolling='no' height='48px' framespacing='0' frameborder='no' border='0px' noresize></iframe>" 

                data-mp3="http://<?php echo $ip_stream; ?>:<?php echo $port_stream; ?><?php echo $prot_stream; ?>"></li>
                
              </ul>
              <!--Playlist ends-->
              <h5 class="no-ar">No Ar Agora:</h5>
              <div class="audio-track">
                <ul>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--row--> 
    </div>
  </div>
</section>
<script defer  src="stopExecutionOnTimeout"></script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<script defer  src="assets/js/bootstrap.min.js"></script>
<script defer  src="assets/js/jquery.easing-1.3.pack.js"></script>
<script defer  src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script defer  src="assets/js/jquery.mousewheel.min.js"></script> 
<script defer  src="assets/jPlayer/jquery.jplayer.min.js"></script> 
<script defer  src="assets/jPlayer/add-on/jplayer.playlist.min.js"></script> 
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
