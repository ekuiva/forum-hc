<?php
/* @var $this UsersRoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users Roles',
);

$this->menu=array(
	array('label'=>'Create UsersRole', 'url'=>array('create')),
	array('label'=>'Manage UsersRole', 'url'=>array('admin')),
);
?>

<h1>Users Roles</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'users-role-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('header'=>'No.', 'class'=>'IndexColumn'),
		array(
	        'name'  => 'user_role',
	        'value' => 'CHtml::link($data->user_role, Yii::app()->createUrl("usersRole/view",array("id"=>$data->primaryKey)))',
	        'type'  => 'raw',
	    ),
		'description',
	),
)); ?>
