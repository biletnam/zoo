<?php 
//var_dump($anemnes);

$dataProvider=new CArrayDataProvider($priv,array(
		'id' => 'id_priv',
		'keyField' => 'id_priv',
	));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'priv-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
			'name' => 'Дата',
            'type' => 'raw',
            'value' => '$data->date',
		),
		array(
			'name' => 'Описание',
            'type' => 'raw',
            'value' => '$data->description',
		),
		array(
			'name' => 'Состояние',
            'type' => 'raw',
            'value' => '($data->complete == \'0\')?\'Не сделано\':\'Сделано\'',
		),
		array(
			'name' => 'Тип',
            'type' => 'raw',
            'value' => '($data->crazy == \'0\')?\'Обычная\':\'Бешенство\'',
		),
		array(
			'class'=>'CButtonColumn',
			'buttons'=> array(
					'view'=>array(
							'url' => 'Yii::app()->createUrl("priv/view&id=$data->id_priv")',
							'label'=>'Просмотр',
					),
					'update'=>array(
							'url' => 'Yii::app()->createUrl("priv/update&id=$data->id_priv")',
							'label'=>'Изменить',
					),
					'delete'=>array(
							'url' => 'Yii::app()->createUrl("priv/delete&id=$data->id_priv")',
							'label'=>'Удалить',
					),
				),
		),
	),
	'summaryText' => 'Показано с {start} по {end} из {count} записей',
));

echo CHtml::link(CHtml::encode("Новая прививка"),
                    array("priv/create","id_animal" => $animal),array('class'=>'btn btn-success'));