<?php
/* @var $this UsersRoleController */
/* @var $model UsersRole */

$this->breadcrumbs=array(
	'Users Roles'=>array('index'),
	$model->id_user_role=>array('view','id'=>$model->id_user_role),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersRole', 'url'=>array('index')),
	array('label'=>'Create UsersRole', 'url'=>array('create')),
	array('label'=>'View UsersRole', 'url'=>array('view', 'id'=>$model->id_user_role)),
	array('label'=>'Manage UsersRole', 'url'=>array('admin')),
);
?>

<h1>Update UsersRole <?php echo $model->id_user_role; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>