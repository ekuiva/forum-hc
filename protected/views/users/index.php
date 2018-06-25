<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('header'=>'No.', 'class'=>'IndexColumn'),
		array(
	        'name'  => 'username',
	        'value' => 'CHtml::link($data->username, Yii::app()->createUrl("users/view",array("id"=>$data->primaryKey)))',
	        'type'  => 'raw',
	    ),
	    array(
	        'name'  => 'id_users_role',
	        'value' => 'usersRole::model()->findByPk($data->id_users_role)->user_role',
	        'type'  => 'raw',
	    ),
	),
)); ?>
