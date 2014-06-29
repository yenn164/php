<?php
/* @var $this CLIENTEController */
/* @var $model CLIENTE */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CLIENTE', 'url'=>array('index')),
	array('label'=>'Manage CLIENTE', 'url'=>array('admin')),
);
?>

<h1>Create CLIENTE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>