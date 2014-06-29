<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idCliente=>array('view','id'=>$model->idCliente),
	'Update',
);

$this->menu=array(
	array('label'=>'List CLIENTE', 'url'=>array('index')),
	array('label'=>'Create CLIENTE', 'url'=>array('create')),
	array('label'=>'View CLIENTE', 'url'=>array('view', 'id'=>$model->idCliente)),
	array('label'=>'Manage CLIENTE', 'url'=>array('admin')),
);
?>

<h1>Update CLIENTE <?php echo $model->idCliente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>