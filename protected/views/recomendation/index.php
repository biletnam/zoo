<?php
/* @var $this RecomendationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recomendations',
);

$this->menu=array(
	array('label'=>'Create Recomendation', 'url'=>array('create')),
	array('label'=>'Manage Recomendation', 'url'=>array('admin')),
);
?>

<h1>Recomendations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
