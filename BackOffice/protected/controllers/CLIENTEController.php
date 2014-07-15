<?php

class CLIENTEController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
			//	'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new CLIENTE;
                $modelt=new TRANSACCION;
               
               $inmuebles = Yii::app()->db->createCommand()
                      ->select('i.idinmueble')
                      ->from('INMUEBLE i')             
                       ->leftjoin('TRANSACCION t','i.idinmueble = t.idInmueble  and t.idClientePropietario = NULL')
                         ->queryAll();
                   $model->inmuebles = $inmuebles;
                   
		if(isset($_POST['CLIENTE']))
		{
                        
			$model->attributes=$_POST['CLIENTE']; 
                         $modelt->idClientePropietario = $model->idCliente;
                          $modelt->fechaTrans = $model->fechaTrans;
                           $modelt->tipoTrans = $model->tipoTrans;
                            $modelt->idInmueble = $model->idInmueble;
                       $modelt->idTrans = $model->idTrans;
//                        Yii::app()->user->setFlash('tuvieja','hola'. $model->tipoTrans);
//                          $this->refresh();
//                        $modelt->attributes=$_POST['TRANSACCION'];
			if($model->insert()){
                                       
                          $modelt->idClientePropietario = $model->idCliente;
                          $modelt->fechaTrans = $model->fechaTrans;
                          $modelt->tipoTrans = $model->tipoTrans;
                          $modelt->idInmueble = $model->idInmueble;
                          $modelt->idTrans = $model->idTrans;
                         
                          $modelt->insert();
				$this->redirect(array('view','id'=>$model->idCliente));
                        }
		}

		$this->render('create',array(
			'model'=>$model,                      
		));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CLIENTE']))
		{
			$model->attributes=$_POST['CLIENTE'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idCliente));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('CLIENTE');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        	public function actionAgenda()
	{
		$dataProvider=new CActiveDataProvider('CLIENTE');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CLIENTE('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CLIENTE']))
			$model->attributes=$_GET['CLIENTE'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return CLIENTE the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=CLIENTE::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CLIENTE $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
