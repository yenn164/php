<?php
/* @var $this UBICACIONController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ubicacions',
);

$this->menu=array(
	array('label'=>'Create UBICACION', 'url'=>array('create')),
	array('label'=>'Manage UBICACION', 'url'=>array('admin')),
);
?>

<h1>Ubicacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
