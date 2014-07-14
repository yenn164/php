<?php
/* @var $this INMUEBLEController */
/* @var $data INMUEBLE */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idinmueble')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idinmueble), array('view', 'id' => $data->idinmueble)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fechaPublicacion')); ?>:</b>
    <?php echo CHtml::encode($data->fechaPublicacion); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
    <?php if ($data->tipo == 1) {
        echo CHtml::encode('Casa');
    } elseif ($data->tipo == 2) {
        echo CHtml::encode('Apartamento');
    } elseif ($data->tipo == 3) {
        echo CHtml::encode('Terreno');
    } elseif ($data->tipo == 4) {
        echo CHtml::encode('Local Comercial');
    }; ?>   
    <br />

    <!-- FICHA -->   
    <b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
<?php if ($data->moneda == 0) {
    echo CHtml::encode('$');
} else {
    echo CHtml::encode('U$S');
};
echo ' ';
echo CHtml::encode($data->precio); ?>
    <br />        
    <b><?php echo CHtml::encode($data->getAttributeLabel('padron')); ?>:</b>
    <?php echo CHtml::encode($data->padron); ?>
    <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('destacado')); ?>:</b>
    <?php if ($data->destacado == 0) {
        echo CHtml::encode('NO');
    } else {
        echo CHtml::encode('SI');
    } ?>  
    <br />

    <!--APTOCASACOMERCIAL-->
    <?php
    if ($data->tipo == 1 || $data->tipo == 2 || $data->tipo == 4) {
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('gastosComunes'));
        echo ': ';
        echo '</b>';
        echo CHtml::encode($data->gastosComunes);
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('anioConst'));
        echo ': ';
        echo '</b>';
        echo CHtml::encode($data->anioConst);
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('superEdif'));
        echo ': ';
        echo '</b>';
        echo CHtml::encode($data->superEdif);
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('banios'));
        echo ': ';
        echo '</b>';
        echo CHtml::encode($data->banios);
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('cocina'));
        echo ': ';
        echo '</b>';
        if ($data->cocina == 0) {
            echo CHtml::encode('NO');
        } else {
            echo CHtml::encode('SI');
        }
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('comedor'));
        echo ': ';
        echo '</b>';
        if ($data->comedor == 0) {
            echo CHtml::encode('NO');
        } else {
            echo CHtml::encode('SI');
        }
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('mejoras'));
        echo ': ';
        echo '</b>';
        if ($data->mejoras == 0) {
            echo CHtml::encode('NO');
        } else {
            echo CHtml::encode('SI');
        }
        echo '<br />';
    }
    ?>
    <!-- APTOYCASA -->
<?php
if ($data->tipo == 1 || $data->tipo == 2) {
    echo '<b>';
    echo CHtml::encode($data->getAttributeLabel('living'));
    echo ': ';
    echo '</b>';
    if ($data->living == 0) {
        echo CHtml::encode('NO');
    } else {
        echo CHtml::encode('SI');
    }
    echo '<br />';
    echo '<b>';
    echo CHtml::encode($data->getAttributeLabel('dormitorios'));
    echo ': ';
    echo '</b>';
    echo CHtml::encode($data->dormitorios);
    echo '<br />';
}
?>


    <!-- APTO -->
    <?php
    if ($data->tipo == 2) {
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('piso'));
        echo ': ';
        echo '</b>';
        echo CHtml::encode($data->piso);
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('terraza'));
        echo ': ';
        echo '</b>';
        if ($data->terraza == 0) {
            echo CHtml::encode('NO');
        } else {
            echo CHtml::encode('SI');
        }
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('equipado'));
        echo ': ';
        echo '</b>';
        if ($data->equipado == 0) {
            echo CHtml::encode('NO');
        } else {
            echo CHtml::encode('SI');
        }
        echo '<br />';
    }
    ?>


    <!-- TERRENO -->
    <?php
    if ($data->tipo == 3) {
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('nivelado'));
        echo ': ';
        echo '</b>';
        if ($data->nivelado == 0) {
            echo CHtml::encode('NO');
        } else {
            echo CHtml::encode('SI');
        }
        echo '<br />';
        echo '<b>';
        echo CHtml::encode($data->getAttributeLabel('agreste'));
        echo ': ';
        echo '</b>';
        if ($data->agreste == 0) {
            echo CHtml::encode('NO');
        } else {
            echo CHtml::encode('SI');
        }
        echo '<br />';
    }
    ?>


    <b><?php echo CHtml::encode($data->getAttributeLabel('departamento')); ?>:</b>
<?php echo CHtml::encode($data->departamento); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
<?php echo CHtml::encode($data->ciudad); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('barrio')); ?>:</b>
<?php echo CHtml::encode($data->barrio); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('calle')); ?>:</b>
<?php echo CHtml::encode($data->calle); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
<?php echo CHtml::encode($data->numero); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('apto')); ?>:</b>
<?php echo CHtml::encode($data->apto); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
<?php echo CHtml::encode($data->descripcion); ?>
    <br />

<?php
Yii::import('application.extensions.EGMap.*');

$gMap = new EGMap();
$gMap->setWidth(300);
$gMap->setHeight(300);
$gMap->zoom = 16;
$mapTypeControlOptions = array(
    'position' => EGMapControlPosition::LEFT_BOTTOM,
    'style' => EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);

$gMap->mapTypeControlOptions = $mapTypeControlOptions;

$gMap->setCenter($data->latitud, $data->longitud);

// Create GMapInfoWindows
$info_window_a = new EGMapInfoWindow($data->descripcion);
$info_window_b = new EGMapInfoWindow('Inmobiliaria DOMUS');

$icon = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/home.png");

$icon->setSize(32, 37);
$icon->setAnchor(16, 16.5);
$icon->setOrigin(0, 0);

// Create marker
$marker = new EGMapMarker($data->latitud, $data->longitud, array('title' => 'Marker With Custom Image', 'icon' => $icon));
$marker->addHtmlInfoWindow($info_window_a);
$gMap->addMarker($marker);

$label_options = array(
    'backgroundColor' => 'yellow',
    'opacity' => '0.75',
    'width' => '100px',
    'color' => 'blue'
);

$gMap->renderMap();
?>


    <div class="container">
<?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal));  ?>
<?php echo CHtml::image('protected/images/upload/' . $data->foto, "foto", array("width" => 100, 'title' => $data->getAttributeLabel('foto'),'style' => 'display: inline')); ?>
  
<?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal));  ?>
<?php echo CHtml::image('protected/images/upload/' . $data->foto2, "foto2", array("width" => 100, 'title' => $data->getAttributeLabel('foto2'),'style' => 'display: inline')); ?>

<?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal));  ?>
<?php echo CHtml::image('protected/images/upload/' . $data->foto3, "foto3", array("width" => 100, 'title' => $data->getAttributeLabel('foto3'),'style' => 'display: inline')); ?>

<?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal));  ?>
<?php echo CHtml::image('protected/images/upload/' . $data->foto4, "foto4", array("width" => 100, 'title' => $data->getAttributeLabel('foto4'),'style' => 'display: inline')); ?>

<?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal));  ?>
<?php echo CHtml::image('protected/images/upload/' . $data->foto5, "foto5", array("width" => 100, 'title' => $data->getAttributeLabel('foto5'),'style' => 'display: inline')); ?>

</div>
</div>