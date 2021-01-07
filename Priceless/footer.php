<?php 
	$title = get_the_title();
?>

<footer <?php if($title == 'contato'){echo 'style="padding:20px 0;"';} ?>>
	<?php 
		if($title != 'Contato' &&  is_404() == false){
	?>
	<section class="metodologia">
		<div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou telefone.</p>
			<a href="/wordpress/contato">Entrar Contato</a>
		</div>
	</section>

	<?php 
		}
	?>
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
				<img src="<?php echo get_theme_root_uri(); ?>/Priceless/images/logo-footer.png" />
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_theme_root_uri(); ?>/Priceless/js/jquery.js"></script>
<script src="<?php echo get_theme_root_uri(); ?>/Priceless/js/slick.min.js"></script>
<script src="<?php echo get_theme_root_uri(); ?>/Priceless/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnv7y3NuVB3H7-6XXXbtFUYOsvWql_d-8&"></script>
<script>
	$('section.clientes-slider .slider-container').slick({
		dots: true,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});

	$('section.depoimentos .depoimentos-box').slick({
		dots: true,
		arrows:false,
	    infinite: true,
	    speed:1000,
	    autoplay:true,
	    autoplaySpeed:1000,
	    slidesToShow: 1,
	    centerMode:false
	});
</script>
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