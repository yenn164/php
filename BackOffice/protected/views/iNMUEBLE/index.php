<?php
/* @var $this INMUEBLEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inmuebles',
);

$this->menu=array(
	array('label'=>'Create INMUEBLE', 'url'=>array('create')),
	array('label'=>'Manage INMUEBLE', 'url'=>array('admin')),
);
?>

<h1>Inmuebles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
