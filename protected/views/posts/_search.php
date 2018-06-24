<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'last_edited'); ?>
		<?php echo $form->textField($model,'last_edited', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'published'); ?>
		<?php echo $form->textField($model,'published', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('class'=>'form-control col-lg-6', 'size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('class'=>'form-control col-lg-6', 'rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'id_category'); ?>
		<?php echo $form->textField($model,'id_category', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->