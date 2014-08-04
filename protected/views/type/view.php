<?php
/* @var $this TypeController */
/* @var $model Type */

$this->breadcrumbs=array(
	'Типы'=>array('index'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'Список типов', 'url'=>array('index')),
	array('label'=>'Добавить новый тип', 'url'=>array('create')),
	array('label'=>'Изменить данные типа', 'url'=>array('update', 'id'=>$model->id_type)),
	array('label'=>'Удалить тип', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_type),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h3>Просмотр данных о типе животных <?php //echo $model->id_type; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_type',
		'name',
		'description',
	),
)); ?>
