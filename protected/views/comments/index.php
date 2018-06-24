<?php
/* @var $this CommentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comments',
);

$this->menu=array(
	array('label'=>'Create Comments', 'url'=>array('create')),
	array('label'=>'Manage Comments', 'url'=>array('admin')),
);
?>

<h1>Comments</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'comments-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'comment',
		'id_user',
		'published',
	),
)); ?>
