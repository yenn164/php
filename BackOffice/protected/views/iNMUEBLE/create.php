<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List INMUEBLE', 'url'=>array('index')),
	array('label'=>'Manage INMUEBLE', 'url'=>array('admin')),
);
?>

<h1>Create INMUEBLE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>