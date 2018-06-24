<?php
/* @var $this UsersRoleController */
/* @var $model UsersRole */

$this->breadcrumbs=array(
	'Users Roles'=>array('index'),
	$model->id_user_role,
);

$this->menu=array(
	array('label'=>'List UsersRole', 'url'=>array('index')),
	array('label'=>'Create UsersRole', 'url'=>array('create')),
	array('label'=>'Update UsersRole', 'url'=>array('update', 'id'=>$model->id_user_role)),
	array('label'=>'Delete UsersRole', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user_role),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsersRole', 'url'=>array('admin')),
);
?>

<h1>View UsersRole #<?php echo $model->id_user_role; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user_role',
		'user_role',
		'description',
	),
)); ?>
