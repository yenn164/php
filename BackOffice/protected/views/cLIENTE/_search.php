<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCliente'); ?>
		<?php echo $form->textField($model,'idCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Documento'); ?>
		<?php echo $form->textField($model,'documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Teléfono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Teléfono Celular'); ?>
		<?php echo $form->textField($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo Electrónico'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dirección'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>150)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->