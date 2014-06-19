<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idCliente,
);

$this->menu=array(
	array('label'=>'List CLIENTE', 'url'=>array('index')),
	array('label'=>'Create CLIENTE', 'url'=>array('create')),
	array('label'=>'Update CLIENTE', 'url'=>array('update', 'id'=>$model->idCliente)),
	array('label'=>'Delete CLIENTE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CLIENTE', 'url'=>array('admin')),
);
?>

<h1>View CLIENTE #<?php echo $model->idCliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCliente',
		'nombre',
		'documento',
		'telefono',
		'celular',
		'email',
		'direccion',
	),
)); ?>
