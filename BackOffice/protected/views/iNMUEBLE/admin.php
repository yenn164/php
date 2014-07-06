<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Listar Inmuebles', 'url'=>array('index')),
	array('label'=>'Nuevo Inmueble', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inmueble-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Inmuebles</h1>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inmueble-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idinmueble',
		'fechaPublicacion',
		'gastosComunes',
		'superEdif',
		'anioConst',
		'dormitorios',
		/*
		'banios',
		'cocina',
		'living',
		'comedor',
		'terraza',
		'piso',
		'equipado',
		'padron',
		'mejoras',
		'nivelado',
		'agreste',
		'tipo',
		'idubicacion',
		'foto',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
