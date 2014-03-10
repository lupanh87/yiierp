<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/PartnerBank.css');
$this->breadcrumbs=array(
	$this->module->id,
);

$this->menu=array(
	array('label'=>'Create Post','url'=>array('create')),
	array('label'=>'Manage Post','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'null', // null or 'inverse'
    'brand'=>'Các tài khoản Ngân Hàng',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form><br><br>',
        array(
            'class'=>'bootstrap.widgets.TbButton',
            'label'=>'Create',
            'type'=>'null', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse',
            'url'=>  Yii::app()->baseUrl.'/PartnerBank/PartnerBank/Create',
            'size'=>'null', // null, 'large', 'small' or 'mini',
            'htmlOptions'=>array('class'=>'createpartner')
        )
    ),
    'htmlOptions'=>array('style'=>'height:100px')
)); ?>
<?php
    $gridColumns = array(
	array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
	array('name'=>'bank_name', 'header'=>'Tên Ngân Hàng'),
        array('name'=>'bank_bic', 'header'=>'Mã Ngân Hàng'),
	array('name'=>'acc_number', 'header'=>'Số tài khoản'),
	array('name'=>'owner_name', 'header'=>'Chủ Tài Khoản'),
	array(
                'header'=>'Thao tác',
		'htmlOptions' => array('nowrap'=>'nowrap','style'=>'width:100px;text-align:center'),
		'class'=>'bootstrap.widgets.TbButtonColumn',
		'viewButtonUrl'=> $this->id, 
		'updateButtonUrl'=>null,
		'deleteButtonUrl'=>null,
	)
    );
    $this->widget(
        'bootstrap.widgets.TbGridView',
        array(
            'type' => 'bordered',
            'dataProvider' => $provider,
            'template' => "{items}",
            'columns' => $gridColumns,
        )
    );
?>
