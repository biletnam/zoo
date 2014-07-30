<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */

$this->breadcrumbs=array(
	'Recomendations'=>array('index'),
	$model->id_recomendation,
);

$this->menu=array(
	array('label'=>'List Recomendation', 'url'=>array('index')),
	array('label'=>'Create Recomendation', 'url'=>array('create')),
	array('label'=>'Update Recomendation', 'url'=>array('update', 'id'=>$model->id_recomendation)),
	array('label'=>'Delete Recomendation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_recomendation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recomendation', 'url'=>array('admin')),
);
?>

<h1>View Recomendation #<?php echo $model->id_recomendation; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_recomendation',
		'id_anemnes',
		'rp',
		'ds',
	),
)); ?>
