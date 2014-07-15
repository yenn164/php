<?php
/* @var $this TRANSACCIONController */
/* @var $model TRANSACCION */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listado de Transacciones', 'url'=>array('index')),
//	array('label'=>'Create TRANSACCION', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaccion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administracion de Transaccions</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaccion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTrans',
		'tipoTrans',
		'fechaTrans',
		'idClientePropietario',
		'idInmueble',
		'idClienteInteres',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
