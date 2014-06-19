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
		<?php echo $form->label($model,'idinmueble'); ?>
		<?php echo $form->textField($model,'idinmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPublicacion'); ?>
		<?php echo $form->textField($model,'fechaPublicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gastosComunes'); ?>
		<?php echo $form->textField($model,'gastosComunes',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'superEdif'); ?>
		<?php echo $form->textField($model,'superEdif',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anioConst'); ?>
		<?php echo $form->textField($model,'anioConst'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dormitorios'); ?>
		<?php echo $form->textField($model,'dormitorios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banios'); ?>
		<?php echo $form->textField($model,'banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cocina'); ?>
		<?php echo $form->textField($model,'cocina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'living'); ?>
		<?php echo $form->textField($model,'living'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comedor'); ?>
		<?php echo $form->textField($model,'comedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terraza'); ?>
		<?php echo $form->textField($model,'terraza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'piso'); ?>
		<?php echo $form->textField($model,'piso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'equipado'); ?>
		<?php echo $form->textField($model,'equipado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padron'); ?>
		<?php echo $form->textField($model,'padron'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mejoras'); ?>
		<?php echo $form->textField($model,'mejoras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelado'); ?>
		<?php echo $form->textField($model,'nivelado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agreste'); ?>
		<?php echo $form->textField($model,'agreste'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idubicacion'); ?>
		<?php echo $form->textField($model,'idubicacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->