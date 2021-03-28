<?php
/* @var $this TelcosController */
/* @var $model Telcos */

$this->breadcrumbs=array(
	'Telcoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Telcos', 'url'=>array('index')),
	array('label'=>'Manage Telcos', 'url'=>array('admin')),
);
?>

<h1>Create Telcos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>