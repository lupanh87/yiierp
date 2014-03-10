<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'video_type',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textAreaRow($model,'video_id',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'title',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'tags',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'category_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_uploaded',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'video_length',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'rating_number_votes',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rating_total_points',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_rating',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'thumbnail',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'number_of_views',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_comments',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'published',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'seo',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'eid',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'time',array('class'=>'span5','maxlength'=>8)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
