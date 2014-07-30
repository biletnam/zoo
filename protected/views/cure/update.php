<?php
/* @var $this CureController */
/* @var $model Cure */

/*$this->breadcrumbs=array(
	'Cures'=>array('index'),
	$model->id_cure=>array('view','id'=>$model->id_cure),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cure', 'url'=>array('index')),
	array('label'=>'Create Cure', 'url'=>array('create')),
	array('label'=>'View Cure', 'url'=>array('view', 'id'=>$model->id_cure)),
	array('label'=>'Manage Cure', 'url'=>array('admin')),
);
*/?>

<h1>Изменить лечение<?php //echo $model->id_cure; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>