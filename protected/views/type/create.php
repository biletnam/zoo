<?php
/* @var $this TypeController */
/* @var $model Type */

$this->breadcrumbs=array(
	'Типы'=>array('index'),
	'Создать',
);

/*$this->menu=array(
	array('label'=>'Список типов', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);*/
?>

<h1>Новый тип животных</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>