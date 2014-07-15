<?php
/* @var $this USERController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Usuarios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'password',
	),
)); ?>

<?php $user = User::model()->findByAttributes(array('nombre'=>Yii::app()->user->name));?>
<?php $enabled=Yii::app()->authManager->isAssigned('Director',$user->id);
If ($enabled)
{
?>   

<ul class="nav nav-tabs nav-stacked">
<?php foreach(Yii::app()->authManager->getAuthItems() as $data):?>
<?php $enabled=Yii::app()->authManager->isAssigned($data->name,$model->id)?>   
    <li><a href="#">
        <h4><?php echo $data->name?>  
            <?php echo CHtml::link($enabled?"Off":"on",array("USER/assign","id"=>$model->id,"item"=>$data->name),
                    array("class"=>$enabled?"btn-primary":"btn"));?>
        </h4>
        <p> 
     
    </a></li>
<?php endforeach; ?>
</ul>
<?php } ?>