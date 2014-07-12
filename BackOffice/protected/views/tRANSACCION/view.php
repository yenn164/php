<?php
/* @var $this TRANSACCIONController */
/* @var $model TRANSACCION */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	$model->idTrans,
);

$this->menu=array(
	array('label'=>'List TRANSACCION', 'url'=>array('index')),
	array('label'=>'Create TRANSACCION', 'url'=>array('create')),
	array('label'=>'Update TRANSACCION', 'url'=>array('update', 'id'=>$model->idTrans)),
	array('label'=>'Delete TRANSACCION', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTrans),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TRANSACCION', 'url'=>array('admin')),
);
?>

<h1>View TRANSACCION #<?php echo $model->idTrans; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTrans',
		'tipoTrans',
		'fechaTrans',
		'idClientePropietario',
		'idInmueble',
		'idClienteInteres',
	),
)); ?>
