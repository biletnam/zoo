<?php
/* @var $this AnemnesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anemnes',
);

$this->menu=array(
	array('label'=>'Create Anemnes', 'url'=>array('create')),
	array('label'=>'Manage Anemnes', 'url'=>array('admin')),
);
?>

<h1>Anemnes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
