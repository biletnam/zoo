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

<h3>Новый тип животных</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>