<?php
/* @var $this PostsCategoryController */
/* @var $model PostsCategory */
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
		<?php echo $form->label($model,'category_name'); ?>
		<?php echo $form->textField($model,'category_name', array('class'=>'form-control col-lg-6')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->