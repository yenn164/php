<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Documento'); ?>
		<?php echo $form->textField($model,'documento'); ?>
		<?php echo $form->error($model,'documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Teléfono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Teléfono Celular'); ?>
		<?php echo $form->textField($model,'celular'); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo Electrónico'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dirección'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->