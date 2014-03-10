<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'currency-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'create_uid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'write_date',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'write_uid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rounding',array('class'=>'span5','maxlength'=>65)); ?>

	<?php echo $form->textFieldRow($model,'symbol',array('class'=>'span5','maxlength'=>4)); ?>

	<?php echo $form->textFieldRow($model,'company_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'base',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'active',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'position',array('class'=>'span5','maxlength'=>0)); ?>

	<?php echo $form->textFieldRow($model,'accuracy',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
