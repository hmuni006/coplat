<?php
/* @var $this MenteeController */
/* @var $model Mentee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mentee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_role_user_id'); ?>
		<?php echo $form->textField($model,'user_role_user_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_role_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_role_role_id'); ?>
		<?php echo $form->textField($model,'user_role_role_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_role_role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personal_mentor_user_role_user_id'); ?>
		<?php echo $form->textField($model,'personal_mentor_user_role_user_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'personal_mentor_user_role_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectmentor_project_project_mentor_user_role_user_id'); ?>
		<?php echo $form->textField($model,'projectmentor_project_project_mentor_user_role_user_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'projectmentor_project_project_mentor_user_role_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectmentor_project_project_id'); ?>
		<?php echo $form->textField($model,'projectmentor_project_project_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'projectmentor_project_project_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->