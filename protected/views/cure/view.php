<?php
/* @var $this CureController */
/* @var $model Cure */

$this->breadcrumbs=array(
	'Cures'=>array('index'),
	$model->id_cure,
);

$this->menu=array(
	array('label'=>'List Cure', 'url'=>array('index')),
	array('label'=>'Create Cure', 'url'=>array('create')),
	array('label'=>'Update Cure', 'url'=>array('update', 'id'=>$model->id_cure)),
	array('label'=>'Delete Cure', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cure),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cure', 'url'=>array('admin')),
);
?>

<h1>View Cure #<?php echo $model->id_cure; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cure',
		'id_anemnes',
		'rp',
		'ds',
	),
)); ?>
