<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id Inmueble'); ?>
		<?php echo $form->textField($model,'idinmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha de Publicación'); ?>
		<?php echo $form->textField($model,'fechaPublicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gastos Comunes'); ?>
		<?php echo $form->textField($model,'gastosComunes',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Superficie Edificada'); ?>
		<?php echo $form->textField($model,'superEdif',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Año de Construcción'); ?>
		<?php echo $form->textField($model,'anioConst'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dormitorios'); ?>
		<?php echo $form->textField($model,'dormitorios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Baños'); ?>
		<?php echo $form->textField($model,'banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cocina'); ?>
		<?php echo $form->textField($model,'cocina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Living'); ?>
		<?php echo $form->textField($model,'living'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comedor'); ?>
		<?php echo $form->textField($model,'comedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Terraza'); ?>
		<?php echo $form->textField($model,'terraza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Piso'); ?>
		<?php echo $form->textField($model,'piso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Equipado'); ?>
		<?php echo $form->textField($model,'equipado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Padrón'); ?>
		<?php echo $form->textField($model,'padron'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mejoras'); ?>
		<?php echo $form->textField($model,'mejoras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nivelado'); ?>
		<?php echo $form->textField($model,'nivelado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Agreste'); ?>
		<?php echo $form->textField($model,'agreste'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id Ubicación'); ?>
		<?php echo $form->textField($model,'idubicacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->