<?php
/* @var $this AnimalController */
/* @var $model Animal */

$this->breadcrumbs=array(
	'Данные о владельце животного'=>array('/master/view&id='.$model->id_master),
	$model->name=>array('view','id'=>$model->id_animal),
	'Изменить',
);

$this->menu=array(
	//array('label'=>'Список животных', 'url'=>array('index')),
	array('label'=>'Добавить новое животное', 'url'=>array('create')),
	array('label'=>'Просмотреть животное', 'url'=>array('view', 'id'=>$model->id_animal)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить данные о животном <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>