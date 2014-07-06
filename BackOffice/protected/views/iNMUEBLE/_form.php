<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inmueble-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
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
                
   		<?php echo $form->labelEx($model,'picture'); ?>
		<?php echo CHtml::activeFileField($model, 'picture'); ?>
		<?php echo $form->error($model,'picture'); ?>
                <?php if(!$model->isNewRecord){ //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/uploads/'.$model->foto,"foto",array("width"=>200, 'title'=>$model->foto)); ?>
                </div>       

                <?php } ?>
	</div>
       
        <div class="row">
                
   		<?php echo $form->labelEx($model,'foto2'); ?>
		<?php echo CHtml::activeFileField($model, 'foto2'); ?>
		<?php echo $form->error($model,'foto2'); ?>
                <?php if(!$model->isNewRecord){ //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/uploads/'.$model->foto2,"foto2",array("width"=>200, 'title'=>$model->foto2)); ?>
                </div>       

                <?php } ?>
	</div>
        <div class="row">
                
   		<?php echo $form->labelEx($model,'foto3'); ?>
		<?php echo CHtml::activeFileField($model, 'foto3'); ?>
		<?php echo $form->error($model,'foto3'); ?>
                <?php if(!$model->isNewRecord){ //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/uploads/'.$model->foto3,"foto3",array("width"=>200, 'title'=>$model->foto3)); ?>
                </div>       

                <?php } ?>
	</div>
        <div class="row">
                
   		<?php echo $form->labelEx($model,'foto4'); ?>
		<?php echo CHtml::activeFileField($model, 'foto4'); ?>
		<?php echo $form->error($model,'foto4'); ?>
                <?php if(!$model->isNewRecord){ //mostramos la imagen?>
                <div class="container">
                    <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                    <?php echo CHtml::image('protected/images/uploads/'.$model->foto4,"foto4",array("width"=>200, 'title'=>$model->foto4)); ?>
                </div>       

                <?php } ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->