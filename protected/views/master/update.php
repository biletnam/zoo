<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Владельцы'=>array('index'),
	$model->id_master=>array('view','id'=>$model->id_master),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список владельцев', 'url'=>array('index')),
	array('label'=>'Добавить владельца', 'url'=>array('create')),
	array('label'=>'Просмотр владельца', 'url'=>array('view', 'id'=>$model->id_master)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить данные владельца <?php echo $model->id_master; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>