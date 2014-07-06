<?php
$this->pageTitle=Yii::app()->name . ' - Apr';
$this->breadcrumbs=array(
	'Apr',
);
?>
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="contact">
                <div class="contact-form">
                    <h2>Calculo de APR</h2>
                  
                    <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'apr-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                            ),
                    )); ?>
                     <div class="flash-success">
                            <?php echo Yii::app()->user->getFlash('apr'); ?>
                    </div>
                     <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
                    
                <div>
                    <span><?php echo $form->labelEx($model,'loanAmount'); ?></span>
                    <span><?php echo $form->textField($model,'loanAmount', array('class'=>'textbox'))?></span>
                    <span><?php echo $form->error($model,'loanAmount'); ?></span>
                </div>
                <div>
                    <span><?php echo $form->labelEx($model,'extraCost'); ?></span>
                    <span><?php echo $form->textField($model,'extraCost', array('class'=>'textbox')); ?></span>
                    <span><?php echo $form->error($model,'extraCost'); ?></span>
                </div>
                <div>
                    <span><?php echo $form->labelEx($model,'interestRate'); ?></span>
                    <span><?php echo $form->textField($model,'interestRate', array('class'=>'textbox')); ?></span>
                    <span><?php echo $form->error($model,'interestRate'); ?></span>
                </div>
                <div>
                    <span><?php echo $form->labelEx($model,'months'); ?></span>
                    <span><?php echo $form->textField($model,'months',array('class'=>'textbox')); ?></span>
                    <span><?php echo $form->error($model,'months'); ?></span>
                </div>
               <div>
                            <span>
                                <?php echo CHtml::submitButton('Submit', array('value'=>'Calcular')); ?>
                            </span>
                           </div>
                     <?php $this->endWidget(); ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>


