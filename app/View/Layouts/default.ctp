<?php

$cakeDescription = __d('cake_dev', 'Compu_Seven: Creatividad Sin Limites');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('http://fonts.googleapis.com/css?family=Montserrat:400,700');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600');
		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('style.css');
		echo $this->Html->css('responsive.css');
		echo $this->Html->css('animate.css');


		echo $this->Html->script(array('jquery.1.8.3.min.js'));
		echo $this->Html->script(array('bootstrap.js'));
		echo $this->Html->script(array('jquery-scrolltofixed.js'));
		echo $this->Html->script(array('jquery.easing.1.3.js'));
		echo $this->Html->script(array('jquery.isotope.js'));
		echo $this->Html->script(array('wow'));
		echo $this->Html->script(array('classie'));




	?>
</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/logo.png" alt=""></a>
        </figure>
        <h1 class="animated fadeInDown delay-07s">Bienvenido a Compu_Seven</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>Somos una Startups enfocados en una Creatividad Sin Limites.</li>
        </ul>
            <a class="link animated fadeInUp delay-1s" href="#">Comenzar</a>
    </div>
</div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Inicio</a></li>
            <li><a href="#service">Servicios</a></li>
            <li><a href="#Portfolio">Portafolio</a></li>
            <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
            <li><a href="#client">Clientes</a></li>
            <li><a href="#team">Equipo</a></li>
            <li><a href="#contact">Contacto</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Nuestros Servicios</h2>
    	<h6>Nosotros te ofrecemos servicios adaptados a tus necesidades.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Sistemas de Informacion</h3>
                        <p>Te ofrecemos sistemas de informaci&oacute;n para tu empresa o negocio adaptados a tus necesidades.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Web Sites</h3>
                        <p>Te ofrecemos la posibilidad de implementar una pagina web adaptada a tus necesidades.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Aplicativos Moviles</h3>
                        <p>Te ofrecemos aplicaciones para tu Iphone u Android para gestionar tus tareas.</p>
                    </div>
                </div>
								<div class="service-list">

                	<div class="service-list-col2">
                        <h3>Aplicativos de Escritorio</h3>
                        <p>Te ofrecemos aplicaciones gestionables localmente desde tu ordenador personal para solventar tus necesidades.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>24/7 Soporte</h3>
                        <p>Soporte Tecnico las 24 horas los 7 dias de la semana.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="img/macbook-pro.png" alt="">
            </figure>

        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="img/iphone.png" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>Trabajo Destacado</h2>
            	<P class="padding-b">En Compu_Seven nuestro compromiso primordial es ofrecerle a nuestra clientela un trabajo optimo que logre cumplir aun m&aacute;s all&aacute; de sus expectativas, pudiendo as&iacute; destacar en nuestros trabajos.</P>
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>El Cliente Involucrado</h3>
                        <p>Ofrecemos la posibilidad al cliente de involucrase en el avance progresivo del desarrollo de su sistema de informacion o pagina web, mediante el seguimiento
												por medio del acceso a un subdomio personalizado para cada uno de nuestros clientes</p>
                    </div>
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>Facil instalaci&oacute;n</h3>
                        <p>Las Aplicaciones para ambiente movil o de escritorio que desarrollamos te permiten una facil y amigable instalacion en cada una de nuestras apps desarrolladas.</p>
                    </div>
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>Diseño Amigable</h3>
                        <p>La Interfaz de Usuario de cada uno de nuestros trabajos, se enfoca en ser desarrollada con la utilizaci&oacute;n de las ultimas tendencias de diseño que permitan a cada uno de los usuarios de una curva de aprendizaje muy facil para el
												correcto uso de cada uno de nuestros trabajos realizados. </p>
                    </div>
                </div>

            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Portafolio</h2>
    	<h6>Portafolio de nuestros trabajos m&aacute;s recientes.</h6>
      <div class="portfolioFilter">
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >Todos</a></li>
            <li><a href="#" data-filter=".branding" >Apps Escritorio</a></li>
            <li><a href="#" data-filter=".webdesign" >Ambiente Web</a></li>
            <li><a href="#" data-filter=".printdesign" >Apps Movil</a></li>
            <!--<li><a href="#" data-filter=".photography" >Photography</a></li>-->
        </ul>
       </div>

	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            	<div class=" Portfolio-box webdesign">
                	<a href="#"><img src="img/Portfolio-pic1.jpg" alt=""></a>
                	<h3>Inversiones Emmanuel</h3>
                    <p>Sistema de Control de Pagos</p>
                </div>
                <div class="Portfolio-box webdesign">
                	<a href="#"><img src="img/Portfolio-pic2.jpg" alt=""></a>
                	<h3>Alcaldia del Municipio Roscio</h3>
                    <p>Sistema de Gestion y Control de Documentos</p>
                </div>
                <div class=" Portfolio-box webdesign">
                	<a href="#"><img src="img/Portfolio-pic3.jpg" alt=""></a>
                	<h3>Restaurante "El Rincón del Sabor"</h3>
                    <p>Pagina Web</p>
                </div>
                <div class=" Portfolio-box branding" >
                	<a href="#"><img src="img/Portfolio-pic4.jpg" alt=""></a>
                	<h3>Libreria "El Palmar"</h3>
                    <p>Sistema de Facturación</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="img/Portfolio-pic5.jpg" alt=""></a>
                	<h3>Hipster</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography">
                	<a href="#"><img src="img/Portfolio-pic6.jpg" alt=""></a>
                	<h3>Windmills</h3>
                    <p>Photography</p>
                </div>
    </div>
</section><!--main-section-end-->


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">¡Debo dar Fé de su exelente trabajo y agradable atención,superarón mis expectativas, los recomiendo
								al 100%!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>Luis Miguel Bianchi Acosta</h3>
                <span>Gerente de  Resutarante "El Rincón del Sabor"</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->
<div class="c-logo-part"><!--c-logo-part-start-->
	<div class="container">
    	<ul>
        	<li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>
    	</ul>
	</div>
</div><!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>Equipo</h2>
        <h6>Tome una mirada más cercana a nuestro increíble equipo de trabajo.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="https://www.facebook.com/LuisMendez19" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="https://plus.google.com/u/0/117874171414738773745" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Luis Mendez</h3>
                <span class="wow fadeInDown delay-03s">Director Ejecutivo</span>
                <p class="wow fadeInDown delay-03s">Ingeniero en Informática, enfocado en el area de la programación con amplios
								conocimientos del tema, siempre dispuesto para ayudar a los demás.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="https://twitter.com/Emanueljtc" class="fa-twitter"></a></li>
                        <li><a href="https://www.facebook.com/emanuel.torresclemente" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="https://plus.google.com/u/0/109552615989256096128" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Emanuel Torres C.</h3>
                <span class="wow fadeInDown delay-06s">Director Tecnológico</span>
                <p class="wow fadeInDown delay-06s">Estudiante del Campo Informático, especializado en el area de desarrollo
								con iniciativa para aprender y enseñar de sus conocimientos.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="" class="fa-twitter"></a></li>
                        <li><a href="" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Sandra Castillo</h3>
                <span class="wow fadeInDown delay-09s">Gerente de Ventas</span>
                <p class="wow fadeInDown delay-09s">Publicista, Creativa y Eficaz son sus caracteristicas principales,
								encargada de todo el ambito del marketing de nuestra empresa.</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Creatividad Sin Limites.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">

        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Dirección:</h3>
                	<span>San Juan de los Morros<br>Guárico, Venezuela</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Telefonos:</h3>
                	<span>Reservados</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>compu.7@gmail.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Domingo - Sabado:</strong> 10am - 8pm<br>
                </div>
                <!-- <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="https://www.facebook.com/Compu_Seven-287960841342317/"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul> -->
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	<input class="input-text" type="text" name="" value="Su Nombre *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Su Email *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                	<textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Su Mensaje *</textarea>
                    <input class="input-btn" type="submit" value="Enviar Mensaje">
                </div>
            </div>
        </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
        <span class="copyright">Copyright © 2016 | <a href="#">Compu_Seven Site Web</a> echo por Compu_Seven</span>
    </div>
    <!--
        All links in the footer should remain intact.
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Knight
    -->
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();

  </script>


<script type="text/javascript">
	$(window).load(function(){

		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){


  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;


  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });

  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
         });
         return false;
    });

});

</script>
</body>
</html>
