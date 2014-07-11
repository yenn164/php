<?php
/* @var $this INMUEBLEController */
/* @var $data INMUEBLE */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idinmueble')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idinmueble), array('view', 'id'=>$data->idinmueble)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPublicacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPublicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gastosComunes')); ?>:</b>
	<?php echo CHtml::encode($data->gastosComunes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superEdif')); ?>:</b>
	<?php echo CHtml::encode($data->superEdif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anioConst')); ?>:</b>
	<?php echo CHtml::encode($data->anioConst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dormitorios')); ?>:</b>
	<?php echo CHtml::encode($data->dormitorios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banios')); ?>:</b>
	<?php echo CHtml::encode($data->banios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cocina')); ?>:</b>
	<?php echo CHtml::encode($data->cocina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('living')); ?>:</b>
	<?php echo CHtml::encode($data->living); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comedor')); ?>:</b>
	<?php echo CHtml::encode($data->comedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terraza')); ?>:</b>
	<?php echo CHtml::encode($data->terraza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piso')); ?>:</b>
	<?php echo CHtml::encode($data->piso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipado')); ?>:</b>
	<?php echo CHtml::encode($data->equipado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padron')); ?>:</b>
	<?php echo CHtml::encode($data->padron); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mejoras')); ?>:</b>
	<?php echo CHtml::encode($data->mejoras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelado')); ?>:</b>
	<?php echo CHtml::encode($data->nivelado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agreste')); ?>:</b>
	<?php echo CHtml::encode($data->agreste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

         <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('protected/images/uploads/'.$data->foto,"foto",array("width"=>200, 'title'=>$data->getAttributeLabel('foto'))); ?>
         </div>

        <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('protected/images/uploads/'.$data->foto2,"foto2",array("width"=>200, 'title'=>$data->getAttributeLabel('foto2'))); ?>
         </div>
            <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('protected/images/uploads/'.$data->foto3,"foto3",array("width"=>200, 'title'=>$data->getAttributeLabel('foto3'))); ?>
         </div>
            <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('protected/images/uploads/'.$data->foto4,"foto4",array("width"=>200, 'title'=>$data->getAttributeLabel('foto4'))); ?>
         </div>
            <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('protected/images/uploads/'.$data->foto5,"foto5",array("width"=>200, 'title'=>$data->getAttributeLabel('foto5'))); ?>
         </div>

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitud')); ?>:</b>
	<?php echo CHtml::encode($data->latitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitud')); ?>:</b>
	<?php echo CHtml::encode($data->longitud); ?>
	<br />


</div>