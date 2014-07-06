<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->idinmueble,
);

$this->menu=array(
	array('label'=>'Listar Inmuebles', 'url'=>array('index')),
	array('label'=>'Nuevo Inmueble', 'url'=>array('create')),
	array('label'=>'Actualizar Inmueble', 'url'=>array('update', 'id'=>$model->idinmueble)),
	array('label'=>'Borrar Inmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idinmueble),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Vovler', 'url'=>array('admin')),
);
?>

<h1>Ver INMUEBLE #<?php echo $model->idinmueble; ?></h1>

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
		'idubicacion',
	),
)); ?>
