<?php
$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Video','url'=>array('index')),
	array('label'=>'Create Video','url'=>array('create')),
	array('label'=>'Update Video','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Video','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Video','url'=>array('admin')),
);
?>

<h1>View Video #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'video_type',
		'video_id',
		'title',
		'description',
		'tags',
		'category_id',
		'date_uploaded',
		'video_length',
		'rating_number_votes',
		'rating_total_points',
		'updated_rating',
		'thumbnail',
		'number_of_views',
		'number_of_comments',
		'user_id',
		'published',
		'seo',
		'eid',
		'time',
	),
)); ?>
