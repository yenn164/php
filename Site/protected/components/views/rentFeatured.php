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
<?php if($models != null): ?>
    <div class="main_bg1">
        <div class="main1">
            <h2 >Alquileres destacados! </h2>
        </div>
    </div>
                   
    <div class="wrap">
        <div id="owl-demo" class="owl-carousel">

            <?php foreach($models as $rows): ?>

            <?php  $urlpic = Yii::app()->params['urlPropreriesPic'] . $rows['foto'] ?>
            <div class="item" onclick="location.href='details.html';">
                    <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo $urlpic?>" alt="Lazy Owl Image">
                    </div>
                    <div class="cau_left">
                            <h4><a href="details.html"><?php echo $rows['ciudad']. ' '.$rows['barrio']. ' '.$rows['descripcion'] ?></a></h4>
                            <a href="details.html" class="btn">Detalle</a>
                    </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif;