<?php
/* @var $this TelcosController */
/* @var $model Telcos */

$this->breadcrumbs=array(
	'Telcoses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Telcos', 'url'=>array('index')),
	array('label'=>'Create Telcos', 'url'=>array('create')),
	array('label'=>'Update Telcos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Telcos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Telcos', 'url'=>array('admin')),
);
?>

<h1>View Telcos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'amount',
		'date',
	),
)); ?>
