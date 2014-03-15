<?php
/* @var $this PersonalMentorController */
/* @var $data PersonalMentor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_role_user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_role_user_id), array('view', 'id'=>$data->user_role_user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_role_role_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_role_role_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_hours')); ?>:</b>
	<?php echo CHtml::encode($data->max_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_mentees')); ?>:</b>
	<?php echo CHtml::encode($data->max_mentees); ?>
	<br />


</div>