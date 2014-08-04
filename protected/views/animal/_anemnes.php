<?php 

$dataProvider=new CArrayDataProvider($anemnes,array(
		'id' => 'id_anemnes',
		'keyField' => 'id_anemnes',
	));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'anemnes-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		//'id_anemnes',
		//'id_animal',
		array(
			'name' => 'Дата',
            'type' => 'raw',
            'value' => '$data->date',
		),		
		//'date',
		array(
			'name' => 'Описание',
            'type' => 'raw',
            'value' => '$data->description',
		),
		//'description',
		array(
			'name' => 'Сумма (грн.)',
            'type' => 'raw',
            'value' => '$data->summ',
		),
		//'summ',
		//'id_medic',
		array(
			'name' => 'Доктор',
            'type' => 'raw',
            'value' => '$data->medic->lastname',
		),
		array(
			'class'=>'CButtonColumn',
			'buttons'=> array(
					'view'=>array(
							'url' => 'Yii::app()->createUrl("anemnes/view&id=$data->id_anemnes")',
							'label'=>'Просмотр',
					),
					'update'=>array(
							'url' => 'Yii::app()->createUrl("anemnes/update&id=$data->id_anemnes")',
							'label'=>'Изменить',
					),
					'delete'=>array(
							'url' => 'Yii::app()->createUrl("anemnes/delete&id=$data->id_anemnes")',
							'label'=>'Удалить',
					),
				),
		),
	),
	'summaryText' => 'Показано с {start} по {end} из {count} записей',
));

echo CHtml::link(CHtml::encode("Новый анемнез"),
                    array("anemnes/create","id_animal" => $animal),array('class'=>'btn btn-success'));