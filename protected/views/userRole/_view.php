<?php
/* @var $this UserRoleController */
/* @var $data UserRole */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_role')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_user_role), array('view', 'id'=>$data->id_user_role)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>