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
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
</head>

<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	
	<div class="header">
		<div class="main_bg1">
		<div class="logo" style= "margin-left:1%; margin-top: 1%">
			<a href="<?php echo Yii::app()->createUrl('site/index', array("view"=>"index")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/logo_domus_small.png" alt=""/> </a>
		</div>
		
	<div class="main1">
		<div style= "margin-left:50%">
		<h2> Sitio de Administración </h2>
                <div style="float:right;">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Finalizar Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
                </div>
                
		</div>
	
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="<?php echo Yii::app()->createUrl('site/index', array("view"=>"index")); ?>">Inicio</a></li> |
				<li><a href="<?php echo Yii::app()->createUrl('INMUEBLE/Admin', array("view"=>"admin")); ?>">Inmuebles<a></li> |
				<li><a href="<?php echo Yii::app()->createUrl('CLIENTE/Admin', array("view"=>"admin")); ?>">Clientes</a></li> |
				<li><a href="<?php echo Yii::app()->createUrl('USER/Admin', array("view"=>"admin")); ?>">Funcionarios</a></li> |
				<li><a href="calendario.html">Calendario</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Inicio</a></li>
							<li class="nav-item"><a href="<?php echo Yii::app()->createUrl('INMUEBLE/Index', array("view"=>"Index")); ?>">Inmuebles</a></li>
							<li class="nav-item"><a href="<?php echo Yii::app()->createUrl('CLIENTE/Index', array("view"=>"Index")); ?>">Clientes</a></li>
							<li class="nav-item"><a href="<?php echo Yii::app()->createUrl('USER/Index', array("view"=>"Index")); ?>">Funcionarios</a></li>
							<li class="nav-item"><a href="calendario.html">Calendario</a></li>
	                 </ul>
	           </nav>
	
			</div>
	          <div class="clear"> </div>
	          <script src="js/responsive.menu.js"></script>
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
