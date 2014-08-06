<?php
/* @var $this PrivController */
/* @var $model Priv */

$this->breadcrumbs=array(
	//'Прививки'=>array('index'),
	'Просмотр данных животного'=>array('/animal/view','id'=>$model->id_animal),
	$model->date=>array('view','id'=>$model->id_priv),
	'Изменить',
);

$this->menu=array(
	//array('label'=>'Список прививок', 'url'=>array('index')),
	array('label'=>'Добавить новую привику', 'url'=>array('/priv/create','id_animal'=>$model->id_animal)),
	array('label'=>'Просмотреть данные прививки', 'url'=>array('view', 'id'=>$model->id_priv)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h3>Изменить данные прививки</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>