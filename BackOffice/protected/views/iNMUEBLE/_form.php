<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inmueble-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaPublicacion'); ?>
		<?php echo $form->textField($model,'fechaPublicacion'); ?>
		<?php echo $form->error($model,'fechaPublicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gastosComunes'); ?>
		<?php echo $form->textField($model,'gastosComunes',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'gastosComunes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'superEdif'); ?>
		<?php echo $form->textField($model,'superEdif',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'superEdif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anioConst'); ?>
		<?php echo $form->textField($model,'anioConst'); ?>
		<?php echo $form->error($model,'anioConst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dormitorios'); ?>
		<?php echo $form->textField($model,'dormitorios'); ?>
		<?php echo $form->error($model,'dormitorios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banios'); ?>
		<?php echo $form->textField($model,'banios'); ?>
		<?php echo $form->error($model,'banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cocina'); ?>
		<?php echo $form->textField($model,'cocina'); ?>
		<?php echo $form->error($model,'cocina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'living'); ?>
		<?php echo $form->textField($model,'living'); ?>
		<?php echo $form->error($model,'living'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comedor'); ?>
		<?php echo $form->textField($model,'comedor'); ?>
		<?php echo $form->error($model,'comedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terraza'); ?>
		<?php echo $form->textField($model,'terraza'); ?>
		<?php echo $form->error($model,'terraza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'piso'); ?>
		<?php echo $form->textField($model,'piso'); ?>
		<?php echo $form->error($model,'piso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipado'); ?>
		<?php echo $form->textField($model,'equipado'); ?>
		<?php echo $form->error($model,'equipado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'padron'); ?>
		<?php echo $form->textField($model,'padron'); ?>
		<?php echo $form->error($model,'padron'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mejoras'); ?>
		<?php echo $form->textField($model,'mejoras'); ?>
		<?php echo $form->error($model,'mejoras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelado'); ?>
		<?php echo $form->textField($model,'nivelado'); ?>
		<?php echo $form->error($model,'nivelado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agreste'); ?>
		<?php echo $form->textField($model,'agreste'); ?>
		<?php echo $form->error($model,'agreste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idubicacion'); ?>
		<?php echo $form->textField($model,'idubicacion'); ?>
		<?php echo $form->error($model,'idubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto2'); ?>
		<?php echo $form->textField($model,'foto2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'foto2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto3'); ?>
		<?php echo $form->textField($model,'foto3',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'foto3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto4'); ?>
		<?php echo $form->textField($model,'foto4',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'foto4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto5'); ?>
		<?php echo $form->textField($model,'foto5',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'foto5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->textField($model,'departamento',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calle'); ?>
		<?php echo $form->textField($model,'calle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'calle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apto'); ?>
		<?php echo $form->textField($model,'apto'); ?>
		<?php echo $form->error($model,'apto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitud'); ?>
		<?php echo $form->textField($model,'latitud'); ?>
		<?php echo $form->error($model,'latitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitud'); ?>
		<?php echo $form->textField($model,'longitud'); ?>
		<?php echo $form->error($model,'longitud'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->