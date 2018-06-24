<?php
/* @var $this UsersRoleController */
/* @var $model UsersRole */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id_user_role'); ?>
		<?php echo $form->textField($model,'id_user_role', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'user_role'); ?>
		<?php echo $form->textField($model,'user_role',array('class'=>'form-control col-lg-6', 'size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('class'=>'form-control col-lg-6', 'rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->