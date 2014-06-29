<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contáctenos';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="contact">
                <div class="contact-form">
                    <h2>Contáctanos</h2>
                  
                    <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'contact-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                            ),
                    )); ?>
                     <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
                   <?php echo $form->errorSummary($model); ?>
                     
                <div>
                    <span><?php echo $form->labelEx($model,'name'); ?></span>
                    <span><?php echo $form->textField($model,'name', array('class'=>'textbox'))?></span>
                    <span><?php echo $form->error($model,'name'); ?></span>
                </div>
                <div>
                    <span><?php echo $form->labelEx($model,'email'); ?></span>
                    <span><?php echo $form->textField($model,'email', array('class'=>'textbox')); ?></span>
                    <span><?php echo $form->error($model,'email'); ?></span>
                </div>
                <div>
                    <span><?php echo $form->labelEx($model,'phone'); ?></span>
                    <span><?php echo $form->textField($model,'phone', array('class'=>'textbox')); ?></span>
                    <span><?php echo $form->error($model,'phone'); ?></span>
                </div>
                <div>
                    <span><?php echo $form->labelEx($model,'subject'); ?></span>
                    <span><?php echo $form->textArea($model,'subject',array('rows'=>6, 'cols'=>50)); ?></span>
                    <span><?php echo $form->error($model,'phosubjectne'); ?></span>
                </div>
               <div>
                            <span>
                                <?php echo CHtml::submitButton('Submit', array('value'=>'Enviar')); ?>
                            </span>
                           </div>
                     <?php $this->endWidget(); ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
