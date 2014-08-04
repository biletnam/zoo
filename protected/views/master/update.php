<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Список владельце живолтных'=>array('index'),
	$model->lastname=>array('view','id'=>$model->id_master),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список владельцев', 'url'=>array('index')),
	array('label'=>'Добавить владельца', 'url'=>array('create')),
	array('label'=>'Просмотр владельца', 'url'=>array('view', 'id'=>$model->id_master)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h3>Изменить данные владельца</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>