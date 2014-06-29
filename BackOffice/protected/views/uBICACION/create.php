<?php
/* @var $this UBICACIONController */
/* @var $model UBICACION */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UBICACION', 'url'=>array('index')),
	array('label'=>'Manage UBICACION', 'url'=>array('admin')),
);
?>

<h1>Create UBICACION</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>