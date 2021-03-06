<?php

class USERController extends Controller
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
				//'users'=>array('admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				//'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','assign'),
				//'users'=>array('admin'),
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

        public function actionAssign($id)
        
        {
          $user = USER::model()->findByAttributes(array('nombre'=>Yii::app()->user->name));
          $enabled = Yii::app()->authManager->isAssigned('Director',$user->id);
          If ($enabled)
          {
              If (Yii::app()->authManager->isAssigned($_GET["item"],$id))
                (Yii::app()->authManager->revoke($_GET["item"],$id));
              else 
                  Yii::app()->authManager->assign($_GET["item"],$id);
              $this->redirect(array("view","id"=>$id));
          }
          Else
              throw new CHttpException(403,'Acceso denegado');
               
          }
        
                       
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
                $user = USER::model()->findByAttributes(array('nombre'=>Yii::app()->user->name));
                $enabled = Yii::app()->authManager->isAssigned('Director',$user->id);
                If ($enabled)
                {
                    $model=new USER;

                    // Uncomment the following line if AJAX validation is needed
                    // $this->performAjaxValidation($model);

                    if(isset($_POST['USER']))
                    {
                            $model->attributes=$_POST['USER'];
                            if($model->save())
                                    $this->redirect(array('view','id'=>$model->id));
                    }

                    $this->render('create',array(
                            'model'=>$model,
                    ));
                }
                Else
                    throw new CHttpException(403,'Acceso denegado');
               
                
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
          $user = USER::model()->findByAttributes(array('nombre'=>Yii::app()->user->name));
          $enabled = Yii::app()->authManager->isAssigned('Director',$user->id);
          If ($enabled)
          {
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['USER']))
		{
			$model->attributes=$_POST['USER'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
          }
          Else
               throw new CHttpException(403,'Acceso denegado');
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
          $user = USER::model()->findByAttributes(array('nombre'=>Yii::app()->user->name));
          $enabled = Yii::app()->authManager->isAssigned('Director',$user->id);
          If ($enabled)
          {
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
          }
           Else
               throw new CHttpException(403,'Acceso denegado');
                
          }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('USER');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
          $user = USER::model()->findByAttributes(array('nombre'=>Yii::app()->user->name));
          $enabled = Yii::app()->authManager->isAssigned('Director',$user->id);
          If ($enabled)
          {
		$model=new USER('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['USER']))
			$model->attributes=$_GET['USER'];

		$this->render('admin',array(
			'model'=>$model,
		));
          }
          Else
              throw new CHttpException(403,'Acceso denegado');
                
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return USER the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=USER::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param USER $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
