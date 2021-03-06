<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'form-control col-lg-6', 'size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control col-lg-6', 'size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<?php if (Yii::app()->user->name == 'admin'): ?>
	<div class="form-group">
		<?php $user_role = CHtml::listData(UsersRole::model()->findAll(),'id_user_role','user_role'); ?>
		<?php echo $form->labelEx($model,'id_users_role'); ?>
		<?php echo $form->dropDownList($model, 'id_users_role', $user_role, array('class'=>'form-control col-lg-6')); ?>
		<?php echo $form->error($model,'id_users_role'); ?>
	</div>
	<?php endif; ?>
	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->