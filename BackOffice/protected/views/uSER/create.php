<?php
/* @var $this USERController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Nuevo Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>