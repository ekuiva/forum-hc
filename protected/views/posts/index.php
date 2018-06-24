<?php
/* @var $this PostsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Create Posts', 'url'=>array('create')),
	array('label'=>'Manage Posts', 'url'=>array('admin')),
);
?>

<h1>Posts</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'posts-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('header'=>'No.', 'class'=>'IndexColumn'),
		'title',
		'description',
		'id_user',
		'published',
		/*
		'id_category',
		*/
	),
)); ?>
