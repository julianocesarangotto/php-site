<?php include ("admin/bd/player.php");  ?>
<?php include ("config.php");  ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

  <style type="text/css">
    #audio-player {

  width: 100%;
  border-top: #e62948 solid 2px;
  border-bottom: #e62948 solid 2px;
  bottom: 0;
  z-index: 9999;
}
  </style>
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
 

</head>
<body>

<section id="audio-player">
<?php echo $player_proprio; ?>

</section>
</body>
</html>
