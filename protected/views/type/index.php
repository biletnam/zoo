<?php
/* @var $this TypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Типы животных',
);

$this->menu=array(
	array('label'=>'Новый тип', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Типы животных</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'summaryText' => 'Показано с {start} по {end} из {count} записей',
)); ?>
