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
<title><?php echo $page_title; ?></title>

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
     <style>
      html body {width: 100%;height: 100%;padding: 0px;overflow: hidden;font-family: arial;font-size: 10px;color: #6e6e6e;background-color: #000;} #preview-frame {width: 100%;background-color: #fff;}</style>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script>
         var calcHeight = function() {
           $('#preview-frame').height($(window).height());
         }

         $(document).ready(function() {
           calcHeight();
         }); 

         $(window).resize(function() {
           calcHeight();
         }).load(function() {
           calcHeight();
         });
      </script>

</head>
<body>
<?php  
  if ($player_on == 1) {
   include ("player.php");
}else{
 	include ("player-proprio.php");
 }
?>


     <iframe id="preview-frame" src="home.php" name="preview-frame" frameborder="0" noresize="noresize">
      </iframe>


<script src="admin/plugins/jquery/tracking.js"></script>
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
