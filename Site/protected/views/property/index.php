<?php
$this->pageTitle=Yii::app()->name . ' - Inmuebles';
$this->breadcrumbs=array(
	'Inmuebles',
);
?>

<!-- start gallery_sale -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.easing.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
        
        <div class="main_bg">
            <div class="wrap">
                <div class="main">
                    <!-- start gallery_sale  -->
                    <div class="gallery1">
                        <div class="container">
                            <ul id="filters" class="clearfix">
                                    <li><span class="filter active" data-filter="casa apartamento terreno lcomercial">Todos</span></li>
                                    <li><span class="filter" data-filter="casa">Casa</span></li>
                                    <li><span class="filter" data-filter="apartamento">Apartamento</span></li>
                                    <li><span class="filter" data-filter="terreno">Terreno</span></li>
                                    <li><span class="filter" data-filter="lcomercial">Local Comerial</span></li>
                            </ul>
                            <?php $this->widget('PropertiesWidget') ?>
                            
                    </div>
                </div>
            </div>
        </div>
           