<?php
/* @var $this PrivController */
/* @var $model Priv */

$this->breadcrumbs=array(
	'Данные о животном'=>array('/animal/view&id='.$animal),
	'Добавить',
);

/*$this->menu=array(
	array('label'=>'Список прививок', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);*/
?>

<h1>Добавить прививку</h1>

<?php $this->renderPartial('_form', array('model'=>$model,
										  'animal'=>$animal, )); ?>