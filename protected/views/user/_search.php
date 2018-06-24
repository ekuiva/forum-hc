<?php
/* @var $this UserController */
/* @var $model User */
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
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'form-control col-lg-6', 'size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'salt'); ?>
		<?php echo $form->textField($model,'salt',array('class'=>'form-control col-lg-6', 'size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'id_users_role'); ?>
		<?php echo $form->textField($model,'id_users_role', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->