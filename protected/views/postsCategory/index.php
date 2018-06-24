<?php
/* @var $this PostsCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts Categories',
);

$this->menu=array(
	array('label'=>'Create PostsCategory', 'url'=>array('create')),
	array('label'=>'Manage PostsCategory', 'url'=>array('admin')),
);
?>

<h1>Posts Categories</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'posts-category-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('header'=>'No.', 'class'=>'IndexColumn'),
		'id',
		'category_name',
		'description',
	),
)); ?>
