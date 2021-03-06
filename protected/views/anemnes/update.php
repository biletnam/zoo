<?php
/* @var $this AnemnesController */
/* @var $model Anemnes */

$this->breadcrumbs=array(
	'Данные животного'=>array('/animal/view','id'=>$model->id_animal),
	"Анамнез от ".$model->date=>array('view','id'=>$model->id_anemnes),
	'Изменить',
);

$this->menu=array(
	//array('label'=>'Список анемнезов', 'url'=>array('index')),
	array('label'=>'Создать новый анемнез', 'url'=>array('/anemnes/create','id_animal'=>$model->id_animal)),
	array('label'=>'Просмотр анемнеза', 'url'=>array('view', 'id'=>$model->id_anemnes)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h3>Изменить данные анамнеза</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>