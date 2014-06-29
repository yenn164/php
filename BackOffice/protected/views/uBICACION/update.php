<?php
/* @var $this UBICACIONController */
/* @var $model UBICACION */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idubicacion=>array('view','id'=>$model->idubicacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List UBICACION', 'url'=>array('index')),
	array('label'=>'Create UBICACION', 'url'=>array('create')),
	array('label'=>'View UBICACION', 'url'=>array('view', 'id'=>$model->idubicacion)),
	array('label'=>'Manage UBICACION', 'url'=>array('admin')),
);
?>

<h1>Update UBICACION <?php echo $model->idubicacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>