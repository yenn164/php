<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p></p>


<a href="<?php echo Yii::app()->createUrl('Site/login', array("view"=>"login")); ?>">Inicio de Sesión</a>
<a href="<?php echo Yii::app()->createUrl('Site/logout'); ?>">Fin de Sesión</a>