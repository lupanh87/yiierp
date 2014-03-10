<?php
$this->breadcrumbs=array(
	'Currencies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Currency','url'=>array('index')),
	array('label'=>'Create Currency','url'=>array('create')),
	array('label'=>'Update Currency','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Currency','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Currency','url'=>array('admin')),
);
?>

<h1>View Currency #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'create_uid',
		'create_date',
		'write_date',
		'write_uid',
		'rounding',
		'symbol',
		'company_id',
		'date',
		'base',
		'active',
		'position',
		'accuracy',
	),
)); ?>
