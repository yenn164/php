<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listado de Inmuebles', 'url'=>array('index')),
	array('label'=>'Administración de Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Nuevo Inmueble</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>