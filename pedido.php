<?php include ("config.php");  ?>
<html>
<head>
 	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/<?php echo $corsite; ?>.css">
	<script defer  src="assets/js/jquery.js"></script>
	<META http-equiv="refresh" content="3;URL=home"> 
</head>
<body>
<center>
<br/><br/><br/><br/>
	<div class="container">
	<br/>
	<img src="admin/assets/img/logo.png" alt="logo" />
	<div class="event-feed">
		<?php
		if (isset($_POST['enviar'])){
		    $arquivo = "admin/bd/pedidos.php";
		    $newline = 

		    "<tr><th>". $_POST['nome'].
		    "</th><th>". $_POST['email'].
		    "</th><th width='600px'>". $_POST['pedido'].
		    "</th><th>". date("d/m/Y - H:i:s").
		    "</th></tr>";
		    $open = fopen($arquivo,"a+");
		    $write = fwrite($open,$newline);
		}
		?>
		<br/>
		<?php echo "<h5>Olá ". $_POST['nome'] .", seu pedido foi enviado com sucesso, obrigado!</h5>"; ?>
		<br/>
		<a href="home"><button  class="btn btn-danger">Voltar</button></a>
		<br/><br/>
	</div>
	</div>
	</center>
</body>
</html>