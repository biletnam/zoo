<?php
/* @var $this AnemnesController */
/* @var $model Anemnes */

$this->breadcrumbs=array(
	'Данные животного'=>array('/animal/view&id='.$animal),
	'Создать',
);

/*$this->menu=array(
	array('label'=>'Список всех анемнезов', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);*/

?>

<h3>Создать анамнез</h3>

<?php $this->renderPartial('_form', array('model'=>$model,
										  'animal'=>$animal,)); ?>