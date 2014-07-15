<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->idinmueble,
);

$this->menu=array(
	array('label'=>'Listado de Inmueble', 'url'=>array('index')),
	array('label'=>'Nuevo Inmueble', 'url'=>array('create')),
	array('label'=>'Modificar Inmueble', 'url'=>array('update', 'id'=>$model->idinmueble)),
	array('label'=>'Borrar Inmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idinmueble),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración de Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Detalle de Inmueble:  #<?php echo $model->idinmueble; ?></h1>

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
