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
        <?php //echo $form->textFieldRow($model,'fotoprincipal',array('class'=>'span5','maxlength'=>15)); ?>
        <?php 
        echo $form->labelEx($model, 'picture');
        echo $form->fileField($model, 'picture');
        echo $form->error($model, 'picture');
        ?>

        <?php if(!$model->isNewRecord){ //mostramos la imagen?>
        <div class="container">
          <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
          <?php echo CHtml::image('protected/imagen/upload/'.$model->foto,"foto",array("width"=>200, 'title'=>$model->foto)); ?>
        </div>
        <?php } ?>

         <?php 
        echo $form->labelEx($model, 'picture2');
        echo $form->fileField($model, 'picture2');
        echo $form->error($model, 'picture2');
        ?>

        <?php if(!$model->isNewRecord){ //mostramos la imagen?>
        <div class="container">
          <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
          <?php echo CHtml::image('protected/imagen/upload/'.$model->foto,"foto2",array("width"=>200, 'title'=>$model->foto2)); ?>
        </div>
        <?php } ?>

        <?php 
        echo $form->labelEx($model, 'picture3');
        echo $form->fileField($model, 'picture3');
        echo $form->error($model, 'picture3');
        ?>

        <?php if(!$model->isNewRecord){ //mostramos la imagen?>
        <div class="container">
          <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
          <?php echo CHtml::image('protected/imagen/upload/'.$model->foto,"foto3",array("width"=>200, 'title'=>$model->foto3)); ?>
        </div>
        <?php } ?>

        <?php 
        echo $form->labelEx($model, 'picture4');
        echo $form->fileField($model, 'picture4');
        echo $form->error($model, 'picture4');
        ?>

        <?php if(!$model->isNewRecord){ //mostramos la imagen?>
        <div class="container">
          <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
          <?php echo CHtml::image('protected/imagen/upload/'.$model->foto,"foto4",array("width"=>200, 'title'=>$model->foto4)); ?>
        </div>
        <?php } ?>
        
        <?php 
        echo $form->labelEx($model, 'picture5');
        echo $form->fileField($model, 'picture5');
        echo $form->error($model, 'picture5');
        ?>

        <?php if(!$model->isNewRecord){ //mostramos la imagen?>
        <div class="container">
          <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
          <?php echo CHtml::image('protected/imagen/upload/'.$model->foto,"foto5",array("width"=>200, 'title'=>$model->foto5)); ?>
        </div>
        <?php } ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        
<?php $this->endWidget(); ?>

</div><!-- form -->