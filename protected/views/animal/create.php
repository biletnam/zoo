<?php
/* @var $this AnimalController */
/* @var $model Animal */

$this->breadcrumbs=array(
	//'Животные'=>array('index'),
	'Данные владельца животного'=>array('/master/view&id='.$master),
	'Добавить животное',
);

/*$this->menu=array(
	array('label'=>'Список всех животных', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);*/
?>

<h1>Добавить данные о животном</h1>

<?php $this->renderPartial('_form', array('model'=>$model,
										  'master'=>$master)); ?>