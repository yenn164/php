<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
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
			<a href="index.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/logo_domus_small.png" alt=""/> </a>
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
				<li><a href="mapa.html">Ubicación en Mapa</a></li> |
				<li><a href="servicio.html">Servicios</a></li> |
				<li><a href="contacto.html">Contacto</a></li>
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


<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
