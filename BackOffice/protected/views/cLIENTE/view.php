<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idCliente,
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->idCliente)),
	array('label'=>'Borrar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Detalle de CLIENTE #<?php echo $model->idCliente; ?></h1>

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
