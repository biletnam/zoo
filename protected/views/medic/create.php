<?php
/* @var $this MedicController */
/* @var $model Medic */

$this->breadcrumbs=array(
	'Доктора'=>array('index'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список докторов', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Добавить доктора</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>