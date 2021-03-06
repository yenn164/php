<?php
/* @var $this TRANSACCIONController */
/* @var $data TRANSACCION */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTrans')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTrans), array('view', 'id'=>$data->idTrans)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoTrans')); ?>:</b>
	<?php echo CHtml::encode($data->tipoTrans); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaTrans')); ?>:</b>
	<?php echo CHtml::encode($data->fechaTrans); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idClientePropietario')); ?>:</b>
	<?php echo CHtml::encode($data->idClientePropietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->idInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idClienteInteres')); ?>:</b>
	<?php echo CHtml::encode($data->idClienteInteres); ?>
	<br />


</div>