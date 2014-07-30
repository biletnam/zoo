<?php
/* @var $this MedicController */
/* @var $model Medic */

$this->breadcrumbs=array(
	'Доктора'=>array('index'),
	$model->lastname=>array('view','id'=>$model->id_medic),
	'Изменить',
);

$this->menu=array(
	//array('label'=>'Список докторов', 'url'=>array('index')),
	array('label'=>'Добавить доктора', 'url'=>array('create')),
	array('label'=>'Просмотреть данные доктора', 'url'=>array('view', 'id'=>$model->id_medic)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить данные о докторе <?php //echo $model->id_medic; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>