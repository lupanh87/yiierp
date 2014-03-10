<?php
$this->breadcrumbs=array(
	'Currencies'=>array('index'),
	'Manage',
);
?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'currency-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'symbol',
		/*
		'rounding',
		'symbol',
		'company_id',
		'date',
		'base',
		'active',
		'position',
		'accuracy',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			
		),
	),
)); ?>
