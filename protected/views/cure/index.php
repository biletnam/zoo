<?php
/* @var $this CureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cures',
);

$this->menu=array(
	array('label'=>'Create Cure', 'url'=>array('create')),
	array('label'=>'Manage Cure', 'url'=>array('admin')),
);
?>

<h1>Cures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
