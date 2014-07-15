<?php
/* @var $this TRANSACCIONController */
/* @var $model TRANSACCION */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	$model->idTrans=>array('view','id'=>$model->idTrans),
	'Update',
);

$this->menu=array(
	array('label'=>'Listado de Transacciones', 'url'=>array('index')),
//	array('label'=>'Create TRANSACCION', 'url'=>array('create')),
	array('label'=>'Detalle', 'url'=>array('view', 'id'=>$model->idTrans)),
	array('label'=>'Administración de Transacciones', 'url'=>array('admin')),
);
?>

<h1>Update TRANSACCION <?php echo $model->idTrans; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>