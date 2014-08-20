<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Список владельцев животных'=>array('index'),
	'Добавить нового',
);?>

<h3>Добавить данные о новом владельце животных</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>