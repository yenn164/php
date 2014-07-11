<?php
/* @var $this TRANSACCIONController */
/* @var $model TRANSACCION */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaccion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoTrans'); ?>
		<?php echo $form->textField($model,'tipoTrans'); ?>
		<?php echo $form->error($model,'tipoTrans'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaTrans'); ?>
		<?php echo $form->textField($model,'fechaTrans'); ?>
		<?php echo $form->error($model,'fechaTrans'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCliente'); ?>
		<?php echo $form->textField($model,'idCliente'); ?>
		<?php echo $form->error($model,'idCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idInmueble'); ?>
		<?php echo $form->textField($model,'idInmueble'); ?>
		<?php echo $form->error($model,'idInmueble'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->