<?php
/* @var $this INMUEBLEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inmuebles',
);

$this->menu=array(
	array('label'=>'Nuevo Inmueble', 'url'=>array('create')),
	array('label'=>'Administración de Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Inmuebles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
