<?php
/* @var $this UBICACIONController */
/* @var $model UBICACION */

$this->breadcrumbs=array(
	'Ubicaciones'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar Ubicaciones', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Crear UBICACION</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>