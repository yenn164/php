<?php
/*$this->pageTitle=Yii::app()->name . ' - Inmuebles';
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
                                    <li><span class="filter active" data-filter="C A T LC">Todos</span></li>
                                    <li><span class="filter" data-filter="C">Casa</span></li>
                                    <li><span class="filter" data-filter="A">Apartamento</span></li>
                                    <li><span class="filter" data-filter="T">Terreno</span></li>
                                    <li><span class="filter" data-filter="LC">Local Comerial</span></li>
                            </ul>
                            <div id="portfoliolist">
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
           */