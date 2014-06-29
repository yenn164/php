<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
        <!--Custom grupo php CSS-->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.min.js"></script>
        <!-- start slider -->		
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
        <!-- Owl Carousel Assets -->
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/owl.carousel.js"></script>
                     <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
                   <!-- start top_js_button -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/easing.js"></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
        
	<!--End Custom-->
        
        <!-- blueprint CSS framework 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        -->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="aiarray('/site/index')"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/logo_domus_small.png" alt=""/> </a>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="index.html">Inicio</a></li> |
				<li><a href="listado.html">Listado<a></li> |
				<li><a href="avanzada.html">Búsqueda Avanzada</a></li> |
                                <li><a href="echo Url::toRoute(['page', 'id' => 'avanzada']);">Búsqueda Avanzada</a></li> |
				<li><a href="mapa.html">Ubicación en Mapa</a></li> |
				<li><a href="servicio.html">Servicios</a></li> |
                                <li><a href="<?php echo Yii::app()->createUrl('site/contact', array("view"=>"contact")); ?>">Contacto</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Inicio</a></li>
							<li class="nav-item"><a href="listado.html">Listado</a></li>
							<li class="nav-item"><a href="avanzada.html">Búsqueda Avanzada</a></li>
							<li class="nav-item"><a href="mapa.html">Ubicación en Mapa</a></li>
							<li class="nav-item"><a href="servicio.html">Servicios</a></li>
							<li class="nav-item"><a href="contacto.html">Contact</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>
<!-- end Menu -->
<?php echo $content; ?>

<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
	
		
	</div>
</div>
</div>	
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			Taller de PHP - Grupo 07 - Tecnólogo en Informática - 2014
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>
