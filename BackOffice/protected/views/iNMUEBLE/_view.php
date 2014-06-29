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

	<?php /*
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('idubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->idubicacion); ?>
	<br />

	*/ ?>

</div>