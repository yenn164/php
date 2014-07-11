<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List INMUEBLE', 'url'=>array('index')),
	array('label'=>'Create INMUEBLE', 'url'=>array('create')),
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

<h1>Manage Inmuebles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
		'foto',
		'foto2',
		'foto3',
		'foto4',
		'foto5',
		'departamento',
		'ciudad',
		'barrio',
		'calle',
		'numero',
		'apto',
		'descripcion',
		'latitud',
		'longitud',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
