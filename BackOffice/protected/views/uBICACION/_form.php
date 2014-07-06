<?php
/* @var $this UBICACIONController */
/* @var $model UBICACION */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ubicacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Latitud'); ?>
		<?php echo $form->textField($model,'latitud'); ?>
		<?php echo $form->error($model,'latitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Longitud'); ?>
		<?php echo $form->textField($model,'longitud'); ?>
		<?php echo $form->error($model,'longitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'zona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Departamento'); ?>
		<?php echo $form->textField($model,'departamento',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->