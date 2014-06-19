<?php
/* @var $this UBICACIONController */
/* @var $model UBICACION */

$this->breadcrumbs=array(
	'Ubicacions'=>array('index'),
	$model->idubicacion,
);

$this->menu=array(
	array('label'=>'List UBICACION', 'url'=>array('index')),
	array('label'=>'Create UBICACION', 'url'=>array('create')),
	array('label'=>'Update UBICACION', 'url'=>array('update', 'id'=>$model->idubicacion)),
	array('label'=>'Delete UBICACION', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idubicacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UBICACION', 'url'=>array('admin')),
);
?>

<h1>View UBICACION #<?php echo $model->idubicacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idubicacion',
		'latitud',
		'longitud',
		'zona',
		'barrio',
		'ciudad',
		'departamento',
		'descripcion',
	),
)); ?>
