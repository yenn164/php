<?php
$this->pageTitle=Yii::app()->name . ' - Calculo de Lease';
$this->breadcrumbs=array(
	'LeaseMonthlyPayment',
);
?>
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="contact">
                <div class="contact-form">
                    <h2>Calculo de cuota mensual del lease</h2>
                  
                    <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'leasemonthlypayment-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                            ),
                    )); ?>
                     <div class="flash-success">
                            <?php echo Yii::app()->user->getFlash('leasemonthlypayment'); ?>
                    </div>
                     <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
                    
                <div>
                    <span><?php echo $form->labelEx($model,'loanAmount'); ?></span>
                    <span><?php echo $form->textField($model,'loanAmount', array('class'=>'textbox'))?></span>
                    <span><?php echo $form->error($model,'loanAmount'); ?></span>
                </div>
                <div>
                  <span><?php echo $form->labelEx($model,'residualValue'); ?></span>
                  <span><?php echo $form->textField($model,'residualValue', array('class'=>'textbox'))?></span>
                  <span><?php echo $form->error($model,'residualValue'); ?></span>
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



