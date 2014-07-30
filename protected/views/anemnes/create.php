<?php
/* @var $this AnemnesController */
/* @var $model Anemnes */

$this->breadcrumbs=array(
	'Данные животного'=>array('/animal/view&id='.$animal),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список всех анемнезов', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
//var_dump($animal);
?>

<h1>Создать анемнез</h1>

<?php $this->renderPartial('_form', array('model'=>$model,
										  'animal'=>$animal,)); ?>