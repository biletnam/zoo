<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Список владельцев животных'=>array('index'),
	'Добавить нового',
);

/*$this->menu=array(
	array('label'=>'Список владельцев', 
		  'url'=>array('index'),
		  'htmlOptions'=>array('class'=>'art-menu')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
var_dump($this);*/
?>

<h3>Добавить данные о новом владельце животных</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>