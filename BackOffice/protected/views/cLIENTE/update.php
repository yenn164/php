<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idCliente=>array('view','id'=>$model->idCliente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->idCliente)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cliente <?php echo $model->idCliente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>