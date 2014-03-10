<?php 
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/PartnerBank.css');
?>
<?php 
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'horizontalForm',
        'type'=>'horizontal',
    ));
?>
<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'null', // null or 'inverse'
    'brand'=>'Tạo tài khoản Ngân Hàng',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'htmlOptions'=>array('style'=>'height:100px')
)); 
?>
<?php echo $form->dropDownListRow($model, 'state_id',array('Loại tài khoản...')+$btype); ?>
<?php echo $form->textFieldRow($model, 'acc_number'); ?>
<?php echo $form->dropDownListRow($model, 'owner_name', array('Chủ tài khoản ...')+$uaccount); ?>
<?php echo $form->dropDownListRow($model, 'bank', array('Ngân hàng ...')); ?>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Save'));?>
</div>
 
<?php $this->endWidget(); ?>