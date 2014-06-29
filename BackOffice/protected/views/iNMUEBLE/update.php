<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->idinmueble=>array('view','id'=>$model->idinmueble),
	'Update',
);

$this->menu=array(
	array('label'=>'List INMUEBLE', 'url'=>array('index')),
	array('label'=>'Create INMUEBLE', 'url'=>array('create')),
	array('label'=>'View INMUEBLE', 'url'=>array('view', 'id'=>$model->idinmueble)),
	array('label'=>'Manage INMUEBLE', 'url'=>array('admin')),
);
?>

<h1>Update INMUEBLE <?php echo $model->idinmueble; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>