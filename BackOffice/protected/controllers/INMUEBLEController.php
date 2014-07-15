<?php

class INMUEBLEController extends Controller
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
            $user = USER::model()->findByAttributes(array('nombre'=>Yii::app()->user->name));
            $enabled = (Yii::app()->authManager->isAssigned('Director',$user->id) Or Yii::app()->authManager->isAssigned('Administrador',$user->id)) ;
            If ($enabled)
            {
		$model=new INMUEBLE;
                $path_picture = "protected/images/upload"."/";//ruta final de la imagen
               
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['INMUEBLE']))
		{
			$model->attributes=$_POST['INMUEBLE'];
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture');
                        $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();

                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {
                            //$uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/
                            $uploadedFile->saveAs($path_picture.$fileName);
                            $model->foto= $fileName;
                        }
                        
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture2');
                        if ($model->foto2==''||$model->foto2==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto2;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto2=$fileName;

                        }
                        
                            $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture3');
                        if ($model->foto3==''||$model->foto3==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto3;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto3=$fileName;

                        }
                        
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture4');
                        if ($model->foto4==''||$model->foto4==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto4;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto4=$fileName;

                        }
                        
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture5');
                        if ($model->foto5==''||$model->foto5==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto5;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto5=$fileName;

                        }
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->idinmueble));
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
            $enabled = (Yii::app()->authManager->isAssigned('Director',$user->id) Or Yii::app()->authManager->isAssigned('Administrador',$user->id)) ;
            If ($enabled)
            {
		$model=$this->loadModel($id);
                $path_picture = "protected/images/upload"."/";//ruta final de la imagen

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['INMUEBLE']))
		{
                        
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture');
                        if ($model->foto==''||$model->foto==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto=$fileName;

                        }
                        
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture2');
                        if ($model->foto2==''||$model->foto2==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto2;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto2=$fileName;

                        }
                        
                            $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture3');
                        if ($model->foto3==''||$model->foto3==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto3;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto3=$fileName;

                        }
                        
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture4');
                        if ($model->foto4==''||$model->foto4==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto4;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto4=$fileName;

                        }
                        
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $uploadedFile=CUploadedFile::getInstance($model,'picture5');
                        if ($model->foto5==''||$model->foto5==null) {//si el campo de la imagen está vacio o es null
                            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
                        }
                        else{//ya tenemos una imagen registrada
                            $fileName=$model->foto5;
                        }
                        
                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {

                        $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                        $model->foto5=$fileName;

                        }
                        
			$model->attributes=$_POST['INMUEBLE'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idinmueble));
		}

		$this->render('update',array(
			'model'=>$model,
		));
             }
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
            $enabled = (Yii::app()->authManager->isAssigned('Director',$user->id) Or Yii::app()->authManager->isAssigned('Administrador',$user->id)) ;
            If ($enabled)
            {
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }
                 throw new CHttpException(403,'Acceso denegado');
                
        }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('INMUEBLE', array('pagination' => array('pageSize' => 2)));
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
            $enabled = (Yii::app()->authManager->isAssigned('Director',$user->id) Or Yii::app()->authManager->isAssigned('Administrador',$user->id)) ;
            If ($enabled)
            {
		$model=new INMUEBLE('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['INMUEBLE']))
			$model->attributes=$_GET['INMUEBLE'];

		$this->render('admin',array(
			'model'=>$model,
		));
            }
                 throw new CHttpException(403,'Acceso denegado');
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return INMUEBLE the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=INMUEBLE::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'No existe la página solicitada.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param INMUEBLE $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='inmueble-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
