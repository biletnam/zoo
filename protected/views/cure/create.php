<?php
/* @var $this CureController */
/* @var $model Cure */

/*$this->breadcrumbs=array(
	'Cures'=>array('index'),
	'Create',
);*/

/*$this->menu=array(
	array('label'=>'List Cure', 'url'=>array('index')),
	array('label'=>'Manage Cure', 'url'=>array('admin')),
);*/
//var_dump($anemnes);
?>

<h1>Создать лечение</h1>

<?php $this->renderPartial('_form', array('model'=>$model,
										'anemnes'=>$anemnes)); ?>