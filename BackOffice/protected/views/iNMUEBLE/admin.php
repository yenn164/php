<?php
/* @var $this INMUEBLEController */
/* @var $model INMUEBLE */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Listado de Inmuebles', 'url'=>array('index')),
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
		
		'fechaPublicacion',
		'gastosComunes',
		'anioConst',
		'dormitorios',
		'banios',
		'equipado',
		'tipo',
		'departamento',
		'ciudad',
		'barrio',
            	'precio',
		'destacado',
		'moneda',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
