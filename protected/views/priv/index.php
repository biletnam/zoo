<?php
/* @var $this PrivController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Privs',
);

$this->menu=array(
	array('label'=>'Create Priv', 'url'=>array('create')),
	array('label'=>'Manage Priv', 'url'=>array('admin')),
);
?>

<h1>Privs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
