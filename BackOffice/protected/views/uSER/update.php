<?php
/* @var $this USERController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List USER', 'url'=>array('index')),
	array('label'=>'Create USER', 'url'=>array('create')),
	array('label'=>'View USER', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage USER', 'url'=>array('admin')),
);
?>

<h1>Update USER <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>