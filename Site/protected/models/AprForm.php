<?php
class AprForm extends CFormModel
{
    public $loanAmount;
    public $extraCost;
    public $interestRate;
    public $months;
    
    public function rules()
    {
        return array(
                array('loanAmount, interestRate, months', 'required', 'message' => 'El campo es requerido.'),
                array('loanAmount, extraCost, interestRate, months', 'numerical', 'message' => 'El campo debe ser numerico.')
        );
    }
    
    public function attributeLabels()
	{
		return array(
			'loanAmount'=>'Monto del Prestamo',
                        'extraCost'=>'Costo Extra',
                        'interestRate'=>'Intereses',
                        'months'=>'Meses'
		);
	}
}
