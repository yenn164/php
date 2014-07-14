<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'inmueble-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>
    <script>
        $(function() {
            $("#anim").change(function() {
                $("#INMUEBLE_fechaPublicacion").datepicker("option", "showAnim", $(this).val());
            });
        });
        function mostrar() {

              $('input[type=text]').each(function() {$(this).val(''); });
              $('input[type=checkbox]').each(function() {$(this).attr('checked', false); });

            if ($("#INMUEBLE_tipo :selected").text().trim() === 'Apartamento') {
                $('#apto').show();
                $('#aptocasacomercial').show();
                $('#aptoycasa').show();
                $('#terreno').hide();
            }
            if ($("#INMUEBLE_tipo :selected").text().trim() === 'Casa') {
                $('#aptoycasa').show();
                $('#aptocasacomercial').show();
                $('#terreno').hide();
                $('#apto').hide();
            }
            if ($("#INMUEBLE_tipo :selected").text().trim() === 'Terreno') {
                $('#terreno').show();
                $('#aptocasacomercial').hide();
                $('#aptoycasa').hide();
                $('#apto').hide();
            }
            if ($("#INMUEBLE_tipo :selected").text().trim() === 'Local Comercial') {
                $('#aptocasacomercial').show();
                $('#aptoycasa').hide();
                $('#terreno').hide();
                $('#apto').hide();
            }
        }
        ;
    </script>
    <p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'fechaPublicacion'); ?>

        <?php echo $form->error($model, 'fechaPublicacion'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'fechaPublicacion',
            // additional javascript options for the date picker plugin        
            'options' => array(
                'showAnim' => 'slide',
            ),
        ));
        ?>
    </div>     
    <div class="row">
        <?php echo $form->labelEx($model, 'tipo'); ?>
        <?php echo $form->dropDownList($model, 'tipo', array(1 => 'Casa', 2 => 'Apartamento', 3 => 'Terreno', 4 => 'Local Comercial'), array('onChange' => 'mostrar()')); ?>
        <?php echo $form->error($model, 'tipo'); ?>
    </div>
    <div id="ficha" class="row">
        <?php echo $form->labelEx($model, 'moneda'); ?>
        <?php echo $form->dropDownList($model, 'moneda', array(0 => '$', 1 => 'U$S')); ?>          
        <?php echo $form->error($model, 'moneda'); ?>
        <?php echo $form->labelEx($model, 'precio'); ?>
        <?php echo $form->textField($model, 'precio'); ?>
        <?php echo $form->error($model, 'precio'); ?>
        <?php echo $form->labelEx($model, 'padron'); ?>
        <?php echo $form->textField($model, 'padron'); ?>
        <?php echo $form->error($model, 'padron'); ?>
        <?php echo $form->labelEx($model, 'destacado'); ?>
        <?php echo $form->checkBox($model, 'destacado', array('value' => 1, 'uncheckValue' => 0)); ?>  
        <?php echo $form->error($model, 'destacado'); ?>              
    </div> 
    <div id="aptocasacomercial"  style="display:block">
        <?php echo $form->labelEx($model, 'gastosComunes'); ?>
        <?php echo $form->textField($model, 'gastosComunes', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'gastosComunes'); ?> 
        <?php echo $form->labelEx($model, 'anioConst'); ?>
        <?php echo $form->textField($model, 'anioConst'); ?>
        <?php echo $form->error($model, 'anioConst'); ?> 
        <?php echo $form->labelEx($model, 'superEdif'); ?>
        <?php echo $form->textField($model, 'superEdif', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'superEdif'); ?>
        <?php echo $form->labelEx($model, 'banios'); ?>
        <?php echo $form->textField($model, 'banios'); ?>
        <?php echo $form->error($model, 'banios'); ?>
        <?php echo $form->labelEx($model, 'cocina'); ?>
        <?php echo $form->checkBox($model, 'cocina', array('value' => 1, 'uncheckValue' => 0)); ?>  
        <?php echo $form->error($model, 'cocina'); ?> 
        <?php echo $form->labelEx($model, 'comedor'); ?>
        <?php echo $form->checkBox($model, 'comedor', array('value' => 1, 'uncheckValue' => 0)); ?>  
        <?php echo $form->error($model, 'comedor'); ?>
        <?php echo $form->labelEx($model, 'mejoras'); ?>
        <?php echo $form->checkBox($model, 'mejoras', array('value' => 1, 'uncheckValue' => 0)); ?>  
        <?php echo $form->error($model, 'mejoras'); ?>  
    </div>
    <div id="aptoycasa"  style="display:block">
        <?php echo $form->labelEx($model, 'dormitorios'); ?>
        <?php echo $form->textField($model, 'dormitorios'); ?>
        <?php echo $form->error($model, 'dormitorios'); ?> 
        <?php echo $form->labelEx($model, 'living'); ?>
        <?php echo $form->checkBox($model, 'living', array('value' => 1, 'uncheckValue' => 0)); ?>  
        <?php echo $form->error($model, 'living'); ?>  
    </div>
    <div id="apto" class="row" style="display:none">
        <div class="row">   
            <?php echo $form->labelEx($model, 'piso'); ?>
            <?php echo $form->textField($model, 'piso'); ?>
            <?php echo $form->error($model, 'piso'); ?>
            <?php echo $form->labelEx($model, 'terraza'); ?>
            <?php echo $form->checkBox($model, 'terraza', array('value' => 1, 'uncheckValue' => 0)); ?>  
            <?php echo $form->error($model, 'terraza'); ?>         
            <?php echo $form->labelEx($model, 'equipado'); ?>
            <?php echo $form->checkBox($model, 'equipado', array('value' => 1, 'uncheckValue' => 0)); ?>  
            <?php echo $form->error($model, 'equipado'); ?>
        </div>
    </div>
    <div id="terreno" class="row" style="display:none">
        <div class="row">
            <?php echo $form->labelEx($model, 'nivelado'); ?>
            <?php echo $form->dropDownList($model, 'nivelado', array(0 => 'SI', 1 => 'NO')); ?>
            <?php echo $form->error($model, 'nivelado'); ?>
            <?php echo $form->labelEx($model, 'agreste'); ?>
            <?php echo $form->textField($model, 'agreste'); ?>
            <?php echo $form->error($model, 'agreste'); ?>
        </div>
    </div>

    <div id="desc" class="row">
        <div class="row">
           <?php echo $form->labelEx($model, 'departamento'); ?>
             <?php echo $form->dropDownList($model, 'tipo', array('Montevideo' => 'Montevideo', 'Colonia' => 'Colonia', 'Canelones' => 'Canelones', 'San José' => 'San José', 'Maldonado' => 'Maldonado', 'Soriano' => 'Soriano', 'Rocha' => 'Rocha', 'Flores' => 'Flores', 'Florida' => 'Florida', 'Treinta y Tres' => 'Treinta y Tres', 'Cerro Largo' => 'Cerro Largo', 'Río Negro' => 'Río Negro', 'Tacuarembó' => 'Tacuarembó', 'Rivera' => 'Rivera', 'Artigas' => 'Artigas', 'Salto' => 'Salto', 'Lavalleja' => 'Lavalleja', 'Paysandú' => 'Paysandú', 'Durazno' => 'Durazno')); ?>
             <?php echo $form->error($model, 'departamento'); ?>
            
            <?php echo $form->labelEx($model, 'ciudad'); ?>
            <?php echo $form->textField($model, 'ciudad', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'ciudad'); ?>

            <?php echo $form->labelEx($model, 'barrio'); ?>
            <?php echo $form->textField($model, 'barrio', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'barrio'); ?>

            <?php echo $form->labelEx($model, 'calle'); ?>
            <?php echo $form->textField($model, 'calle', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'calle'); ?>

            <?php echo $form->labelEx($model, 'numero'); ?>
            <?php echo $form->textField($model, 'numero'); ?>
            <?php echo $form->error($model, 'numero'); ?>

            <?php echo $form->labelEx($model, 'apto'); ?>
            <?php echo $form->textField($model, 'apto'); ?>
            <?php echo $form->error($model, 'apto'); ?>

            <?php echo $form->labelEx($model, 'descripcion'); ?>
            <?php echo $form->textField($model, 'descripcion', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'descripcion'); ?>

          
            <?php echo $form->textField($model, 'latitud', array('style'=>"display:none")); ?>
            <?php echo $form->textField($model, 'longitud', array('style'=>"display:none")); ?>
    <?php
    Yii::import('application.extensions.EGMap.*');

    $gMap = new EGMap();
     $gMap->setWidth(412);
    $gMap->setHeight(300);
    $gMap->zoom = 16;
    $mapTypeControlOptions = array(
        'position' => EGMapControlPosition::LEFT_BOTTOM,
        'style' => EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
    );

    $gMap->mapTypeControlOptions = $mapTypeControlOptions;

    $gMap->setCenter(-34.914141403481025, -56.16354703903198);

    // Create GMapInfoWindows
    $info_window_a = new EGMapInfoWindow('<div>Inmobiliaria DOMUS</div>');
    $info_window_b = new EGMapInfoWindow('Inmobiliaria DOMUS');

    $icon = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/conference.png");
    $iconh = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/home.png");


    $icon->setSize(32, 37);
    $icon->setAnchor(16, 16.5);
    $icon->setOrigin(0, 0);

    // Create marker
    $marker = new EGMapMarker(-34.914141403481025, -56.16354703903198, array('title' => 'Marker With Custom Image', 'icon' => $icon));
    $marker->addHtmlInfoWindow($info_window_a);
    $gMap->addMarker($marker);
//
//        // Create marker with label
//        $marker = new EGMapMarkerWithLabel(-34.914141403481025, 2.90165944519042, array('title' => 'Marker With Label'));

    $label_options = array(
        'backgroundColor' => 'yellow',
        'opacity' => '0.75',
        'width' => '100px',
        'color' => 'blue'
    );

    // Saving coordinates after user dragged our marker.
    $dragevent = new EGMapEvent('dragend', 'function (event) {$("#INMUEBLE_latitud").val(event.latLng.lat()); $("#INMUEBLE_longitud").val(event.latLng.lng())}', false, EGMapEvent::TYPE_EVENT_DEFAULT);

    // Setting up new event for user click on map, so marker will be created on place and respectful event added.
    $gMap->addEvent(new EGMapEvent('click', 'function (event) {var marker = new google.maps.Marker({position: event.latLng, map: ' . $gMap->getJsName() .
            ', draggable: true, icon: ' . $iconh->toJs() . '}); ' . $gMap->getJsName() .
            '.setCenter(event.latLng); var dragevent = ' . $dragevent->toJs('marker') .
            '; $.ajax({' .
            '"data":({"lat": event.latLng.lat(), "lng": event.latLng.lng()}),' .
            '"cache":false,' .
            '}); $("#INMUEBLE_latitud").val(event.latLng.lat()); $("#INMUEBLE_longitud").val(event.latLng.lng()) }', false, EGMapEvent::TYPE_EVENT_DEFAULT_ONCE));

    $gMap->renderMap();
    ?>

        </div>
    </div>

    <div id="foto">	
        <div class="row">	 

            <?php echo $form->labelEx($model, 'picture'); ?>
            <?php echo $form->fileField($model, 'picture'); ?>
            <?php echo $form->error($model, 'picture'); ?>

            <?php if (!$model->isNewRecord) { //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/upload/' . $model->foto, "foto", array("width" => 200, 'title' => $model->getAttributeLabel('foto'))); ?>
                </div>
            <?php } ?>
            <?php
            echo $form->labelEx($model, 'picture2');
            echo $form->fileField($model, 'picture2');
            echo $form->error($model, 'picture2');
            ?>
            <?php if (!$model->isNewRecord) { //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/upload/' . $model->foto2, "foto2", array("width" => 200, 'title' => $model->getAttributeLabel('foto2'))); ?>
                </div>
            <?php } ?>

            <?php
            echo $form->labelEx($model, 'picture3');
            echo $form->fileField($model, 'picture3');
            echo $form->error($model, 'picture3');
            ?>

            <?php if (!$model->isNewRecord) { //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/upload/' . $model->foto3, "foto3", array("width" => 200, 'title' => $model->foto3)); ?>
                </div>
            <?php } ?>

            <?php
            echo $form->labelEx($model, 'picture4');
            echo $form->fileField($model, 'picture4');
            echo $form->error($model, 'picture4');
            ?>

            <?php if (!$model->isNewRecord) { //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/upload/' . $model->foto4, "foto4", array("width" => 200, 'title' => $model->foto4)); ?>
                </div>
            <?php } ?>

            <?php
            echo $form->labelEx($model, 'picture5');
            echo $form->fileField($model, 'picture5');
            echo $form->error($model, 'picture5');
            ?>

            <?php if (!$model->isNewRecord) { //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/upload/' . $model->foto5, "foto5", array("width" => 200, 'title' => $model->foto5)); ?>
                </div>
            <?php } ?>


        </div>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Modificar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->