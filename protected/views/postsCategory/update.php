<?php
/* @var $this PostsCategoryController */
/* @var $model PostsCategory */

$this->breadcrumbs=array(
	'Posts Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PostsCategory', 'url'=>array('index')),
	array('label'=>'Create PostsCategory', 'url'=>array('create')),
	array('label'=>'View PostsCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PostsCategory', 'url'=>array('admin')),
);
?>

<h1>Update PostsCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>