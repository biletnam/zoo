<?php
/* @var $this TypeController */
/* @var $model Type */

$this->breadcrumbs=array(
	'Типы'=>array('index'),
	$model->name=>array('view','id'=>$model->id_type),
	'Изменить',
);

$this->menu=array(
	//array('label'=>'Список типов', 'url'=>array('index')),
	array('label'=>'Добавить новый тип', 'url'=>array('create')),
	array('label'=>'Просмотр данных типа', 'url'=>array('view', 'id'=>$model->id_type)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить данные о типе животных <?php //echo $model->id_type; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>