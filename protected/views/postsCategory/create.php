<?php
/* @var $this PostsCategoryController */
/* @var $model PostsCategory */

$this->breadcrumbs=array(
	'Posts Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PostsCategory', 'url'=>array('index')),
	array('label'=>'Manage PostsCategory', 'url'=>array('admin')),
);
?>

<h1>Create PostsCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>