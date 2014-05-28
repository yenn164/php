<?php
/* @var $this USERController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List USER', 'url'=>array('index')),
	array('label'=>'Manage USER', 'url'=>array('admin')),
);
?>

<h1>Create USER</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>