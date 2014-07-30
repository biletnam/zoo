<?php
/* @var $this SearchController */

//var_dump($data_master, $data_animal);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#master-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");


$this->breadcrumbs=array(
	'Поиск',
);?>

<h1>Результаты поиска</h1>

<?php
echo CHtml::link('Поиск','#',array('class'=>'search-button'));
echo "<div class='search-form' style='display:none'>";
	$model_master = new Master("search");
	$model_master->unsetAttributes(); 
	$this->renderPartial('_search_all',array('model'=>$model_master,));
echo "</div>";

?>

<div id="grid-search-result">

<?php 

	/*search Masters*/
	if ($data_master) {

		$dataProvider_m = new CArrayDataProvider($data_master, array('keyField' => 'id_master'));
		
		$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'master-grid',
		'dataProvider'=>$dataProvider_m,
		'columns'=>array(
			array(
	            'name' => 'lastname',
	            'type' => 'raw',
	            'value' => $data->lastname,
	            'header' => 'Фамилия'
	        ),
			array(
	            'name' => 'firstname',
	            'type' => 'raw',
	            'value' => $data->firstname,
	            'header' => 'Имя'
	        ),
			array(
	            'name' => 'surname',
	            'type' => 'raw',
	            'value' => $data->surname,
	            'header' => 'Отчество'
	        ),
			array(
	            'name' => 'city',
	            'type' => 'raw',
	            'value' => $data->city,
	            'header' => 'Населенный пункт'
	        ),
	        array(
	            'name' => 'city',
	            'type' => 'raw',
	            'value' => $data->city,
	            'header' => 'Улица'
	        ),
			array(
	            'name' => 'n_home',
	            'type' => 'raw',
	            'value' => $data->n_home,
	            'header' => '№ дома'
	        ),
			array(
				'class'=>'CButtonColumn',
				'buttons'=> array(
						'view'=>array(
								'url' => 'Yii::app()->createUrl("master/view&id=$data->id_master")',
								'label'=>'Просмотр',
						),
						'update'=>array(
								'url' => 'Yii::app()->createUrl("master/update&id=$data->id_master")',
								'label'=>'Изменить',
						),
						'delete'=>array(
								'url' => 'Yii::app()->createUrl("master/delete&id=$data->id_master")',
								'label'=>'Удалить',
						),
					),
			),
		),
		'summaryText' => 'Показано с {start} по {end} из {count} записей',
	));
	}
	/*end search Masters*/

	/*search Animals*/
	if ($data_animal) {
		$dataProvider_a = new CArrayDataProvider($data_animal, array('keyField' => 'id_animal'));
		
		$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'master-grid',
		'dataProvider'=>$dataProvider_a,
		'columns'=>array(
			array(
	            'name' => 'name',
	            'type' => 'raw',
	            'value' => $data->name,
	            'header' => 'Кличка'
	        ),
			array(
	            'name' => 'age',
	            'type' => 'raw',
	            'value' => $data->age,
	            'header' => 'Возраст'
	        ),
			array(
	            'name' => 'reg_num',
	            'type' => 'raw',
	            'value' => $data->reg_num,
	            'header' => 'Регистрационный номер'
	        ),
			array(
	            'name' => 'date_reg',
	            'type' => 'raw',
	            'value' => $data->date_reg,
	            'header' => 'Дата регистрации'
	        ),
	        array(
	            'name' => 'date_death',
	            'type' => 'raw',
	            'value' => $data->date_death,
	            'header' => 'Дата падежа'
	        ),
			array(
				'class'=>'CButtonColumn',
				'buttons'=> array(
						'view'=>array(
								'url' => 'Yii::app()->createUrl("animal/view&id=$data->id_animal")',
								'label'=>'Просмотр',
						),
						'update'=>array(
								'url' => 'Yii::app()->createUrl("animal/update&id=$data->id_animal")',
								'label'=>'Изменить',
						),
						'delete'=>array(
								'url' => 'Yii::app()->createUrl("animal/delete&id=$data->id_animal")',
								'label'=>'Удалить',
						),
					),
			),
		),
		'summaryText' => 'Показано с {start} по {end} из {count} записей',
	));
	}
	/*end search Animals*/	
?>	
	
</div>
