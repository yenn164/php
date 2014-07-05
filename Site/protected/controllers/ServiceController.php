<?php

class ServiceController extends Controller
{
    public function actions()
    {
            return array(
                    // page action renders "static" pages stored under 'protected/views/site/pages'
                    // They can be accessed via: index.php?r=site/page&view=FileName
                    'page'=>array(
                            'class'=>'CViewAction',
                    ),
            );
    }
    
    public function actionIndex()
    {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('index');
    }
    
    
    public function actionApr()
    {
           $model=new AprForm;
		if(isset($_POST['AprForm']))
		{
			$model->attributes=$_POST['AprForm'];
			if($model->validate())
			{
                            $url = "http://www.webservicex.net/FinanceService.asmx?WSDL";
                            $ws = new SoapClient($url, array("trace" => 1, "exception" => 0));   
                            
                            $param = array(
                                "LoanAmount" => $model->loanAmount,
                                "ExtraCost" => $model->extraCost,
                                "InterestRate" => $model->interestRate,
                                "Months" => $model->months,
                              );
                            
                            $response = $ws->APR($param);
                           /* 
                                */
        
        
                            
                            if (is_soap_fault($response)) {
                                Yii::app()->user->setFlash('apr','Ocurrió un error, por favor intente mas tarde.'); 
                            }  
                            else {
                                $res = "<pre>".print_r($response->APRResult, true)."</pre>"; 
                                //$calc = $response->APRResponse->APRResult;
                               Yii::app()->user->setFlash('apr',"Calculo: $res");
                            }
                            
                            $this->refresh();
			}
		}
		$this->render('apr',array('model'=>$model));
    }
    
    public function actionLoanMonthlyPayment()
    {
           $model=new LoanMonthlyPaymentForm;
		if(isset($_POST['LoanMonthlyPaymentForm']))
		{
			$model->attributes=$_POST['LoanMonthlyPaymentForm'];
			if($model->validate())
			{
                            $url = "http://www.webservicex.net/FinanceService.asmx?WSDL";
                            $ws = new SoapClient($url, array("trace" => 1, "exception" => 0));   
                            
                            $param = array(
                                "LoanAmount" => $model->loanAmount,
                                "InterestRate" => $model->interestRate,
                                "Months" => $model->months,
                              );
                            
                            $response = $ws->LoanMonthlyPayment($param);
    
                            if (is_soap_fault($response)) {
                                Yii::app()->user->setFlash('loanmonthlypayment','Ocurrió un error, por favor intente mas tarde.'); 
                            }  
                            else {
                                $res = "<pre>".print_r($response->LoanMonthlyPaymentResult, true)."</pre>"; 
                                //$calc = $response->APRResponse->APRResult;
                               Yii::app()->user->setFlash('loanmonthlypayment',"Calculo: $res");
                            }
                            
                            $this->refresh();
			}
		}
		$this->render('loanmonthlypayment',array('model'=>$model));
    }
    
    public function actionLoanNumberOfPayment()
    {
           $model=new LoanMonthlyPaymentForm;
		if(isset($_POST['LoanMonthlyPaymentForm']))
		{
			$model->attributes=$_POST['LoanMonthlyPaymentForm'];
			if($model->validate())
			{
                            $url = "http://www.webservicex.net/FinanceService.asmx?WSDL";
                            $ws = new SoapClient($url, array("trace" => 1, "exception" => 0));   
                            
                            $param = array(
                                "LoanAmount" => $model->loanAmount,
                                "InterestRate" => $model->interestRate,
                                "MonthlyPayment" => $model->months,
                              );
                            
                            $response = $ws->LoanNumberOfPayment($param);
    
                            if (is_soap_fault($response)) {
                                Yii::app()->user->setFlash('loannumberofpayment','Ocurrió un error, por favor intente mas tarde.'); 
                            }  
                            else {
                                $res = "<pre>".print_r($response->LoanNumberOfPaymentResult, true)."</pre>"; 
                                 Yii::app()->user->setFlash('loannumberofpayment',"Calculo: $res");
                            }
                            
                            $this->refresh();
			}
		}
		$this->render('loannumberofpayment',array('model'=>$model));
    }
    
    public function actionLeaseMonthlyPayment()
    {
           $model=new LeaseMonthlyPaymentForm;
		if(isset($_POST['LeaseMonthlyPaymentForm']))
		{
			$model->attributes=$_POST['LeaseMonthlyPaymentForm'];
			if($model->validate())
			{
                            $url = "http://www.webservicex.net/FinanceService.asmx?WSDL";
                            $ws = new SoapClient($url, array("trace" => 1, "exception" => 0));   
                            
                            $param = array(
                                "LoanAmount" => $model->loanAmount,
                                "ResidualValue" => $model->residualValue,
                                "InterestRate" => $model->interestRate,
                                "Months" => $model->months,
                              );
                            
                            $response = $ws->LeaseMonthlyPayment($param);
    
                            if (is_soap_fault($response)) {
                                Yii::app()->user->setFlash('leasemonthlypayment','Ocurrió un error, por favor intente mas tarde.'); 
                            }  
                            else {
                                $res = "<pre>".print_r($response->LeaseMonthlyPaymentResult, true)."</pre>"; 
                                 Yii::app()->user->setFlash('leasemonthlypayment',"Calculo: $res");
                            }
                            
                            $this->refresh();
			}
		}
		$this->render('leasemonthlypayment',array('model'=>$model));
    }
}

