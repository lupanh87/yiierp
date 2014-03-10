<?php
$this->breadcrumbs=array(
	'Videos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Video','url'=>array('index')),
	array('label'=>'Create Video','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('video-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div style="margin-top:10px;" class="btngroup">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
	    'label'=>'Publish Selected',
	    'type'=>'null', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
	    'size'=>'small', // null, 'large', 'small' or 'mini'
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
	    'label'=>'Delete Selected',
	    'type'=>'null', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
	    'size'=>'small', // null, 'large', 'small' or 'mini'
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
	    'label'=>'Mark Finished',
	    'type'=>'null', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
	    'size'=>'small', // null, 'large', 'small' or 'mini'
	)); ?>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'video-grid',
	'dataProvider'=>$videos,
	'template'=>'{items}{pager}',
	//'filter'=>$model,
	'rowCssClassExpression' => 
		'( $row%2 ? $this->rowCssClass[1] : $this->rowCssClass[0] )'
	,
	'pager' => array('htmlOptions'=>array('class'=>'admin-page-navigation'), 'header' =>''),
	'columns'=>array(
//		 array(
//	        'name'=>'',             
//	        'value'=>'CHtml::checkBox("cid[]",null,array("value"=>$data->id,"id"=>"cid_".$data->id))',
//	        'type'=>'raw',
//	        'htmlOptions'=>array('width'=>5),
//	        //'visible'=>false,
//	        'header'=>'#',
//		 	'htmlOptions' => array("style" => "vertical-align: middle;"),
//        ),
        array(
            'id'=>'selectedItems',
            'class'=>'CCheckBoxColumn',
        	'header'=>'#',
        	'selectableRows' => 30,
        	'htmlOptions' => array("style" => "vertical-align: middle;"),
        ), 
		array(
			'name'	=>	'title',
			'htmlOptions' => array("width" => "30%", "style" => "font-weight:bold;vertical-align: middle;"),
			'value'	=> 'CHtml::link($data->title, Yii::app()->request->baseUrl."/video/view?id=$data->id")',
			'type' => 'raw',
			'header'=>'Tên Video',
			
		),
		array(
			'name'	=>	'catname',
            'filter' => FALSE,
            'sortable' => FALSE,
			'htmlOptions' => array("style" => "text-align:right"),
			'value'	=> '$data->catname->category_name',
			'header'=>'Kèo Đấu',
			'htmlOptions' => array("width" => "30%","style" => "text-align:left;vertical-align: middle;"),
		),
		array(
			'name'	=>	'number_of_views',
            'filter' => FALSE,
            'sortable' => FALSE,
			'htmlOptions' => array("style" => "text-align:right"),
			'value'	=> 'number_format($data->number_of_views,0,".",".")',
			'header'=>'Lượt Xem',
			'htmlOptions' => array("width" => "8%","style" => "text-align:right;vertical-align: middle;"),
		),
		array(
			'name'	=>	'date_uploaded',
            'filter' => FALSE,
            'sortable' => FALSE,
			'htmlOptions' => array("style" => "text-align:right"),
			'value'	=> '$data->date_uploaded',
			'htmlOptions' => array("width" => "10%","style" => "text-align:right; color:#919191;vertical-align: middle;"),
			'header'=>'Uploaded'
		),
		array(
			'name'	=>	'thumbnail',
			'value'	=>	'"<img src=\"".$data->thumbnail."\" width=\"60px\"/>"',
			'type' => 'raw',
            'filter' => FALSE,
            'sortable' => FALSE,
			'header'=>'Thumb',
			'htmlOptions' => array("width" => "6%","style" => "text-align:center;vertical-align: middle;"),
		),
		array(
			'name'	=>	'thumbnail',
			'value'	=>	'CHtml::link("<img src=".Yii::app()->request->baseUrl."/images/a".$data->published.".png width=\"16px\"/>", Yii::app()->request->baseUrl."/video/publish?id=$data->id", array("title"=>"Change State", "rel"=>"tooltip"))',
			'type' => 'raw',
            'filter' => FALSE,
            'sortable' => FALSE,
			'header'=>'State',
			'htmlOptions' => array("width" => "4%","style" => "text-align:center;vertical-align: middle;"),
		),
		/*
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
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'header'=>'Thao Tác',
			'htmlOptions' => array("width" => "8%","style" => "text-align: center;vertical-align: middle;"),
		),
		
	),
)); ?>
