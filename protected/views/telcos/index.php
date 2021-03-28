<?php
/* @var $this TelcosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Telcos',
);

$this->menu=array(
	array('label'=>'Create Telcos', 'url'=>array('create')),
	array('label'=>'Manage Telcos', 'url'=>array('admin')),
);
?>


<h1>Telcos</h1>
<div>

<h3>Quick search for telco price</h3>
<form action="" method="POST">
	<input type="text" name="telconame"/>
	<button type="submit">Submit</button>
	<p>
<?php

	if(isset($_POST['telconame'])){
		$client=new SoapClient('http://localhost/testdrive/index.php?r=search/price');
		echo $client->getPrice($_POST['telconame']);
	}
?></p>
</form>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
