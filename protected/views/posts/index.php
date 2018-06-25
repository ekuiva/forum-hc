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
		array(
		        'name'  => 'title',
		        'value' => 'CHtml::link($data->title, Yii::app()->createUrl("posts/view",array("id"=>$data->primaryKey)))',
		        'type'  => 'raw',
		    ),
		array(
	        'name'  => 'Category',
	        'value' => 'postsCategory::model()->findByPk($data->id_category)->category_name',	
	        'type'  => 'raw',
	    ),
		'published',
	),
)); ?>
