<?php
/* @var $this UserRoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Roles',
);

$this->menu=array(
	array('label'=>'Create UserRole', 'url'=>array('create')),
	array('label'=>'Manage UserRole', 'url'=>array('admin')),
);
?>

<h1>User Roles</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'user-role-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
			'id_user_role',
		'user',
		'description',
	),
)); ?>
