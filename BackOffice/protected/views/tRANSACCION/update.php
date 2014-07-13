<?php
/* @var $this TRANSACCIONController */
/* @var $model TRANSACCION */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	$model->idTrans=>array('view','id'=>$model->idTrans),
	'Update',
);

$this->menu=array(
	array('label'=>'List TRANSACCION', 'url'=>array('index')),
	array('label'=>'Create TRANSACCION', 'url'=>array('create')),
	array('label'=>'View TRANSACCION', 'url'=>array('view', 'id'=>$model->idTrans)),
	array('label'=>'Manage TRANSACCION', 'url'=>array('admin')),
);
?>

<h1>Update TRANSACCION <?php echo $model->idTrans; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>