<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */

/*$this->breadcrumbs=array(
	'Recomendations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recomendation', 'url'=>array('index')),
	array('label'=>'Manage Recomendation', 'url'=>array('admin')),
);*/
?>

<h3>Создать рекомендацию</h3>

<?php $this->renderPartial('_form', array('model'=>$model,
										  'anemnes'=>$anemnes)); ?>