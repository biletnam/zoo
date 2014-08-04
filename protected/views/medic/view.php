<?php
/* @var $this MedicController */
/* @var $model Medic */

$this->breadcrumbs=array(
	'Доктора'=>array('index'),
	$model->lastname,
);

$this->menu=array(
	//array('label'=>'Список докторов', 'url'=>array('index')),
	array('label'=>'Добавить доктора', 'url'=>array('create')),
	array('label'=>'Изменить данные доктора', 'url'=>array('update', 'id'=>$model->id_medic)),
	array('label'=>'Удалить доктора', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medic),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h3>Просмотр данных доктора</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_medic',
		'lastname',
		'firstname',
		'surname',
		'work',
		'description',
	),
)); ?>
