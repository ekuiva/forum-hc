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

<!-- get role -->
<?php $user_role = CHtml::listData(UsersRole::model()->findAll(),'id_user_role','user_role'); 
	  // print_r("<pre>");
	  // print_r($user_role);
	  // print_r("</pre>");
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('header'=>'No.', 'class'=>'IndexColumn'),
		'username',
		'id_users_role',
			array(
                    'header' => 'User Role',
                    'name' => 'id_users_role',
                ),
	),
)); ?>
