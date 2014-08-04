<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */

/*$this->breadcrumbs=array(
	'Recomendations'=>array('index'),
	$model->id_recomendation=>array('view','id'=>$model->id_recomendation),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recomendation', 'url'=>array('index')),
	array('label'=>'Create Recomendation', 'url'=>array('create')),
	array('label'=>'View Recomendation', 'url'=>array('view', 'id'=>$model->id_recomendation)),
	array('label'=>'Manage Recomendation', 'url'=>array('admin')),
);*/
?>

<h3>Изменить рекомендацию</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>