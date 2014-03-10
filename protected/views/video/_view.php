<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_type')); ?>:</b>
	<?php echo CHtml::encode($data->video_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_id')); ?>:</b>
	<?php echo CHtml::encode($data->video_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_uploaded')); ?>:</b>
	<?php echo CHtml::encode($data->date_uploaded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_length')); ?>:</b>
	<?php echo CHtml::encode($data->video_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_number_votes')); ?>:</b>
	<?php echo CHtml::encode($data->rating_number_votes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_total_points')); ?>:</b>
	<?php echo CHtml::encode($data->rating_total_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_rating')); ?>:</b>
	<?php echo CHtml::encode($data->updated_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_views')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_comments')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
	<?php echo CHtml::encode($data->published); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo')); ?>:</b>
	<?php echo CHtml::encode($data->seo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eid')); ?>:</b>
	<?php echo CHtml::encode($data->eid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	*/ ?>

</div>