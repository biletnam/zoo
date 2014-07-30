<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Список владельцев животных'=>array('index'),
	'Добавить нового',
);

/*$this->menu=array(
	array('label'=>'Список владельцев', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);*/
?>

<h1>Добавить данные о новом владельце животных</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>