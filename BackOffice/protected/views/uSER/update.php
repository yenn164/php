<?php
/* @var $this USERController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuarios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>