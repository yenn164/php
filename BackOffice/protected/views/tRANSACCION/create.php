<?php
/* @var $this TRANSACCIONController */
/* @var $model TRANSACCION */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TRANSACCION', 'url'=>array('index')),
	array('label'=>'Manage TRANSACCION', 'url'=>array('admin')),
);
?>

<h1>Create TRANSACCION</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>