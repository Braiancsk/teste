<!DOCTYPE html>
<html>
<head>
	<title>Danki Code - Tema</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link rel="icon" href="https://cursos.dankicode.com/app/Views/public/favicon.ico" type="image/x-icon" />
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><img src="images/logo.png" /></div><!--logo-->
			</header>
			<ul class="menu-desktop">
				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->	
		</div><!--center-->
	</section><!--topo-->
	
	<section class="contato">
		<div class="center">
			<div class="w50 contato-info">
				<h2>A mais importante, <br/>primeira conversa.</h2>
				<br>
				<p>Telefone: (62)99490-1223</p>
				<p>Telefone: (62)99490-1223</p>
				<p>Telefone: (62)99490-1223</p>
				
			<div class="map-container">
				<div id="mapa"></div>
			</div><!--map-container-->
			</div>
		</div><!--center-->
		
		<div class="w50 contato-form">
			<form>
				<input type="text" placeholder="Nome">
				<input type="email" name="email" placeholder="E-mail">
				<input type="text" placeholder="Telefone">
				<select>
					<option>Suporte</option>
					<option>Group</option>
				</select>
				<textarea placeholder="Mensagem"></textarea>
				<input type="submit" value="Enviar">
			</form>
		</div>
		<div class="clear"></div>
	</section><!--contato-->




	<footer style="padding: 60px 0;">
	
		<div class="center">
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="images/logo-footer.png" />
			</div>
		</div>
	</footer>

<script src="js/jquery.js"></script>
<script src="js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnv7y3NuVB3H7-6XXXbtFUYOsvWql_d-8&"></script>
<script>
	//Menu responsivo.
	$(function(){
	$('.menu-mobile').click(function(){
		$(this).find('ul').slideToggle();
	})
})
	
	
</script>
</body>
</html>