<?php
/* @var $this UsersRoleController */
/* @var $model UsersRole */

$this->breadcrumbs=array(
	'Users Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsersRole', 'url'=>array('index')),
	array('label'=>'Manage UsersRole', 'url'=>array('admin')),
);
?>

<h1>Create UsersRole</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>