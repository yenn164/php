<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->idinmueble,
);

$this->menu=array(
	array('label'=>'List INMUEBLE', 'url'=>array('index')),
	array('label'=>'Create INMUEBLE', 'url'=>array('create')),
	array('label'=>'Update INMUEBLE', 'url'=>array('update', 'id'=>$model->idinmueble)),
	array('label'=>'Delete INMUEBLE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idinmueble),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage INMUEBLE', 'url'=>array('admin')),
);
?>

<h1>View INMUEBLE #<?php echo $model->idinmueble; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idinmueble',
		'fechaPublicacion',
		'gastosComunes',
		'superEdif',
		'anioConst',
		'dormitorios',
		'banios',
		'cocina',
		'living',
		'comedor',
		'terraza',
		'piso',
		'equipado',
		'padron',
		'mejoras',
		'nivelado',
		'agreste',
		'tipo',
		'foto',
		'foto2',
		'foto3',
		'foto4',
		'foto5',
		'departamento',
		'ciudad',
		'barrio',
		'calle',
		'numero',
		'apto',
		'descripcion',
		'latitud',
		'longitud',
	),
)); ?>
