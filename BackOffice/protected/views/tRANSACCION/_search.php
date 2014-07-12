<?php
/* @var $this TRANSACCIONController */
/* @var $model TRANSACCION */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTrans'); ?>
		<?php echo $form->textField($model,'idTrans'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoTrans'); ?>
		<?php echo $form->textField($model,'tipoTrans'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaTrans'); ?>
		<?php echo $form->textField($model,'fechaTrans'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idClientePropietario'); ?>
		<?php echo $form->textField($model,'idClientePropietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idInmueble'); ?>
		<?php echo $form->textField($model,'idInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idClienteInteres'); ?>
		<?php echo $form->textField($model,'idClienteInteres'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->