<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'id_user'); ?>
		<?php //echo $form->textField($model,'id_user', array('class'=>'form-control col-lg-6')); ?>
		<?php //echo $form->error($model,'id_user'); ?>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'last_edited'); ?>
		<?php //echo $form->textField($model,'last_edited', array('class'=>'form-control col-lg-6')); ?>
		<?php //echo $form->error($model,'last_edited'); ?>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'published'); ?>
		<?php //echo $form->textField($model,'published', array('class'=>'form-control col-lg-6')); ?>
		<?php //echo $form->error($model,'published'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('class'=>'form-control col-lg-6', 'size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('class'=>'form-control col-lg-6', 'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_category'); ?>
		<?php echo $form->textField($model,'id_category', array('class'=>'form-control col-lg-6')); ?>
		<?php echo $form->error($model,'id_category'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->