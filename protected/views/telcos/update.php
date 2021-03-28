<?php
/* @var $this TelcosController */
/* @var $model Telcos */

$this->breadcrumbs=array(
	'Telcoses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Telcos', 'url'=>array('index')),
	array('label'=>'Create Telcos', 'url'=>array('create')),
	array('label'=>'View Telcos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Telcos', 'url'=>array('admin')),
);
?>

<h1>Update Telcos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>