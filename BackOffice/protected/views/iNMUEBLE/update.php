<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->idinmueble=>array('view','id'=>$model->idinmueble),
	'Modificación',
);

$this->menu=array(
	array('label'=>'Listado de Inmuebles', 'url'=>array('index')),
	array('label'=>'Nuevo Inmueble', 'url'=>array('create')),
	array('label'=>'Ver Inmueble', 'url'=>array('view', 'id'=>$model->idinmueble)),
	array('label'=>'Administración de Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Modificación de Inmueble:  <?php echo $model->idinmueble; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>