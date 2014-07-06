<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LeaseMonthlyPaymentForm
 *
 * @author php
 */
class LeaseMonthlyPaymentForm extends CFormModel
{
    public $loanAmount;
    public $residualValue;
    public $interestRate;
    public $months;
    
    public function rules()
    {
        return array(
                array('loanAmount, interestRate, months', 'required', 'message' => 'El campo es requerido.'),
                array('loanAmount, residualValue, interestRate, months', 'numerical', 'message' => 'El campo debe ser numerico.')
        );
    }
    
    public function attributeLabels()
	{
		return array(
			'loanAmount'=>'Monto del Prestamo',
                        '$residualValue'=>'Valor Residual',
                        'interestRate'=>'Intereses',
                        'months'=>'Meses'
		);
	}
}
