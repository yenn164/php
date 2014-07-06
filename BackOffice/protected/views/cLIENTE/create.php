<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Nuevo Cliente',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Formulario Nuevo Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>