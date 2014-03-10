<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Post','url'=>array('index')),
	array('label'=>'Create Post','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('post-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'post-grid',
	'dataProvider'=>$posts,
	//'filter'=>$posts,
	'template'=>'{items}{pager}',
	'columns'=>array(
		array(
            'id'=>'selectedItems',
            'class'=>'CCheckBoxColumn',
        	'header'=>'#',
        	'selectableRows' => 30,
        	'htmlOptions' => array("style" => "vertical-align: middle;"),
        ), 
		array(
			'name'	=>	'title',
			'htmlOptions' => array("width" => "40%", "style" => "font-weight:bold;vertical-align: middle;"),
			'value'	=> 'CHtml::link($data->title, Yii::app()->request->baseUrl."/post/view?id=$data->id")',
			'type' => 'raw',
			'header'=>'Post Name',
			
		),
        'tags',
		array(
			'header' => 'User Name',
			'sortable' => TRUE,
			'value' => '$data->author->username',
			'htmlOptions' => array("style" => "vertical-align: middle;"),
		),
		array(
			'header' => 'Status',
			
			'value' => '$data->pstatus->name',
			'htmlOptions' => array("style" => "vertical-align: middle;"),
		),
		array(
			'header' => 'Date Created',
			'value' => 'date("H:i d/m/Y", intval($data->create_time))',
			'htmlOptions' => array("style" => "vertical-align: middle;"),
		),
		
		/*
		'update_time',
		'author_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'header'=>'Thao Tác',
			'htmlOptions' => array("width" => "8%","style" => "text-align: center;vertical-align: middle;"),
		),
	),
)); ?>
