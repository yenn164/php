 <link href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.cslider.js"></script>
<script type="text/javascript">
        $(function() {
                $('#da-slider').cslider();
        });
</script>
<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<div id="da-slider" class="da-slider">
        <div class="da-slide">
                <h2>Bienvenido a DOMUS</h2>
                <p>Nuestra misión es ayudarte a que encuentres la casa de tus sueños. Para vivir toda la vida.</p>
                <a href="<?php echo Yii::app()->createUrl('site/contact', array("view"=>"contact")); ?>" class="da-link">Más Información</a>
                <div class="da-img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/slider1.jpg" alt="image01" /></div>
        </div>
        <div class="da-slide">
                <h2>Tu Alquiler</h2>
                <p>Olvidate del stress de  alquilar tu próxima casa. Nuestros consultores altamente calificados te acompañarán en esta travesía facilitándote el trabajo y acortando los tiempos.</p>
                <a href="<?php echo Yii::app()->createUrl('site/contact', array("view"=>"contact")); ?>" class="da-link">Más Información</a>
                <div class="da-img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/slider2.jpg" alt="image01" /></div>
        </div>
        <div class="da-slide">
                <h2>Tu escape a la naturaleza</h2>
                <p>Contamos con una amplia cartera de propiedades para alquiler por temporada tanto en las mejores playas de Uruguay como en el campo para que puedas pasar tus vacaciones alejado o en el centro de la diversión. Tú eliges. </p>
                <a href="<?php echo Yii::app()->createUrl('site/contact', array("view"=>"contact")); ?>" class="da-link">Más información</a>
                <div class="da-img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/slider3.jpg" alt="image01" /></div>
        <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
        </nav>
        </div>
</div>
<div class="wrap">
     <?php $this->widget('RentFeaturedWidget') ?>
</div>
