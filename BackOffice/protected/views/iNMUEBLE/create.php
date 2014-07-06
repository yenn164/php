<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Inmuebles', 'url'=>array('index')),
	array('label'=>'Vovler', 'url'=>array('admin')),
);
?>

<h1>Nuevo INMUEBLE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>