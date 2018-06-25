<?php
/* @var $this UsersRoleController */
/* @var $model UsersRole */

$this->breadcrumbs=array(
	'Users Roles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UsersRole', 'url'=>array('index')),
	array('label'=>'Create UsersRole', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-role-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users Roles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'users-role-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('header'=>'No.', 'class'=>'IndexColumn'),
		array(
	        'name'  => 'user_role',
	        'value' => 'CHtml::link($data->user_role, Yii::app()->createUrl("usersRole/view",array("id"=>$data->primaryKey)))',
	        'type'  => 'raw',
	    ),
		'description',
	array(
		'class'=>'CButtonColumn',
	),
),
)); ?>
