<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'&nbspCERP',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Sales', 'url'=>'#', 'active'=>true,'items'=>array(
                	array('label'=>'SALES'),
                    array('label'=>'Customers', 'url'=>Yii::app()->baseUrl.'/user/admin'),
                    array('label'=>'Quotations', 'url'=>Yii::app()->baseUrl.'/user/admin/create'),
                    array('label'=>'Sales Orders', 'url'=>Yii::app()->baseUrl.'/user/admin/create'),
                    array('label'=>'PRODUCT'),
                    array('label'=>'Products', 'url'=>Yii::app()->baseUrl.'/rights'),
                    array('label'=>'Product Prices', 'url'=>Yii::app()->baseUrl.'/rights'),
                    array('label'=>'Product Category', 'url'=>Yii::app()->baseUrl.'/currency/currency/admin'),
                )),
                array('label'=>'Invoicing', 'url'=>'#'),
                array('label'=>'Warehouse', 'url'=>'#'),
                array('label'=>'Reporting', 'url'=>'#'),
            ),
        ),
		array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Logout', 'url'=>'#'),
                array('label'=>'System Setting', 'url'=>'#', 'items'=>array(
                	array('label'=>'USER SETTING'),
                    array('label'=>'Manage Users', 'url'=>Yii::app()->baseUrl.'/user/admin'),
                    array('label'=>'Create User', 'url'=>Yii::app()->baseUrl.'/user/admin/create'),
                    array('label'=>'Profile Field', 'url'=>Yii::app()->baseUrl.'/user/profileField/admin'),
                    array('label'=>'Profile Field Create', 'url'=>Yii::app()->baseUrl.'/user/profileField/create'),
                    array('label'=>'SYSTEM SETTING'),
                    array('label'=>'Manage Permissions', 'url'=>Yii::app()->baseUrl.'/rights'),
                    array('label'=>'Currency Setting', 'url'=>Yii::app()->baseUrl.'/currency/currency/admin'),
                )),
            ),
        ),
    ),
)); ?>
<table style="width:100%;min-height: 700px;">
	<tr>
		<td width="15%" valign="top" style="background: #dfdfdf;">
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
			    'type'=>'list',
			    'items'=>array(
			        array('label'=>'MODULES'),
			        array('label'=>'Installed Modules', 'icon'=>'icon-download-alt', 'url'=>Yii::app()->baseUrl.'/admin'),
			        array('label'=>'Modules List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->baseUrl.'/video/admin'),
			        array('label'=>'CONFIGURAION'),
			        array('label'=>'Currencies', 'icon'=>'icon-random', 'url'=>Yii::app()->baseUrl.'/currency/currency/admin', 'active'=>true),
			        array('label'=>'Banks List', 'icon'=>'icon-folder-close', 'url'=>'#'),
			        array('label'=>'Settings'),
			        array('label'=>'User Manager', 'icon'=>'user', 'url'=>Yii::app()->baseUrl.'/user/admin'),
			        array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
			    ),
			)); ?>
		</td>
		<td style="padding: 0px 10px; padding-top: 10px;" valign="top">
			<?php echo $content; ?>
		</td>
	</tr>
</table>

</body>
</html>