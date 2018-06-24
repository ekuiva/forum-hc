<?php
/* @var $this PostsCategoryController */
/* @var $model PostsCategory */

$this->breadcrumbs=array(
	'Posts Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PostsCategory', 'url'=>array('index')),
	array('label'=>'Create PostsCategory', 'url'=>array('create')),
	array('label'=>'Update PostsCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PostsCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostsCategory', 'url'=>array('admin')),
);
?>

<h1>View PostsCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_name',
		'description',
	),
)); ?>
