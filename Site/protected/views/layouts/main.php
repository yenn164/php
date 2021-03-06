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
		<div class="logo">
			<a href="<?php echo Yii::app()->createUrl('site/index', array("view"=>"index")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/logo_domus_small.png" alt=""/> </a>
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
				<li class="active"><a href="<?php echo Yii::app()->createUrl('site/index', array("view"=>"index")); ?>">Inicio</a></li> |
				<li><a href="<?php echo Yii::app()->createUrl('property/index', array("view"=>"index")); ?>">Listado<a></li> |
                                <li><a href="echo Url::toRoute(['page', 'id' => 'avanzada']);">Búsqueda Avanzada</a></li> |
				<li><a href="<?php echo Yii::app()->createUrl('service/index', array("view"=>"index")); ?>">Servicios</a></li> |
                                <li><a href="<?php echo Yii::app()->createUrl('site/contact', array("view"=>"contact")); ?>">Contacto</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="<?php echo Yii::app()->createUrl('site/index', array("view"=>"index")); ?>">Inicio</a></li>
							<li class="nav-item"><a href="<?php echo Yii::app()->createUrl('property/index', array("view"=>"index")); ?>">Listado</a></li>
							
							<li class="nav-item"><a href="<?php echo Yii::app()->createUrl('service/index', array("view"=>"index")); ?>">Servicios</a></li>
							<li class="nav-item"><a href="<?php echo Yii::app()->createUrl('site/contact', array("view"=>"contact")); ?>">Contact</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    
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
