<?php
/* @var $this MedicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Доктора',
);

$this->menu=array(
	array('label'=>'Добавить доктора', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h2>Список докторов</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'summaryText' => 'Показано с {start} по {end} из {count} записей',
)); ?>
