<?php
/* @var $this AnemnesController */
/* @var $model Anemnes */

$this->breadcrumbs=array(
	//'Анемнезы'=>array('index'),
	'Данные животного'=>array('/animal/view&id='.$model->id_animal),
	$model->date,
);

$this->menu=array(
	//array('label'=>'Список анемнезов', 'url'=>array('index')),
	array('label'=>'Добавить новый анемнез', 'url'=>array('/anemnes/create&id_animal='.$model->id_animal)),
	array('label'=>'Изменить данные анемнеза', 'url'=>array('update', 'id'=>$model->id_anemnes)),
	array('label'=>'Удалить анемнез', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_anemnes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр данных об анемнезе <?php //echo $model->id_anemnes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_anemnes',
		'date',
		'description',		
		//'id_animal',
		array(
			'label'=>'Кличка',
			'value' => $model->animal->name,
		),
		//'id_medic',
		array(
			'label'=>'Доктор',
			'value' => $model->medic->lastname,
		),
		array(
			'label'=>'Температура тела',
			'value' => $model->temperature,
		),
		/*array(
			'label'=>'Цвет слизистой',
			'value' => $model->color_sl,
		),
		array(
			'label'=>'Состояние кожи',
			'value' => $model->skin,
		),*/
		'summ',
	),
)); 

$this->widget('application.components.wcure', array(
		'data'=>$model->cure,
		'name'=>'Лечение',
		'id_anemnes'=>$model->id_anemnes,
	));

$this->widget('application.components.wrecomendation', array(
		'data'=>$model->recomendation,
		'name'=>'Рекомендации',
		'id_anemnes'=>$model->id_anemnes,
	));

echo "<pre>";
//var_dump($model);
echo "</pre>";