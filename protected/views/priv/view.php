<?php
/* @var $this PrivController */
/* @var $model Priv */

$this->breadcrumbs=array(
	'Просмотр данных животного'=>array('/animal/view','id'=>$model->id_animal),
	$model->date,
);

$this->menu=array(
	//array('label'=>'Список прививок', 'url'=>array('index')),
	array('label'=>'Добавить новую прививку', 'url'=>array('/priv/create','id_animal'=>$model->id_animal)),
	array('label'=>'Изменить данные прививи', 'url'=>array('update', 'id'=>$model->id_priv)),
	array('label'=>'Удалить прививку', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_priv),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр данных о прививке <?php //echo $model->id_priv; ?></h1>
<h3>
	<?php 
		$date_current = CDateTimeParser::parse(date('d-m-Y'), "dd-mm-yyyy");
		$date_priv = CDateTimeParser::parse($model->date, "dd-mm-yyyy");
		if ($date_current > $date_priv) {
			echo "Прививка прошла";
		} elseif ($date_current == $date_priv) {
			echo "Прививка сегодня";
		} else {
			echo "Прививка будет";
		}
	?>
</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'date',
		'description',
		//'crazy',
		array(
			'label'=>'Тип',
			'value' => ($model->crazy == "0") ? "Обычная" : "Бешенство",
		),
		array(
			'label'=>'Состояние',
			'value' => ($model->complete == "0") ? "Не сделно" : "Сделано",
		),
	),
)); ?>
