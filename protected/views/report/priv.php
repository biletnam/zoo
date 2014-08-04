<h3>Прививки</h3>

<div id="report_priv">
	<?php  
		$this->widget('zii.widgets.grid.CGridView', array(
    		'id' => 'grid-priv',
    		'dataProvider' =>$dataProvider,
    		'columns' => array(
    			array(
    				'name' => 'Дата',
    				'value'=> '$data->date',
    				'type' => 'raw'
    			),
    			array(
    				'name' => 'Кличка',
    				'value'=> '$data->animal->name',
    				'type' => 'raw'
    			),
    			array(
    				'name' => 'Вид',
    				'value'=> '$data->animal->type->name',
    				'type' => 'raw'
    			),
    			array(
					'name'=>'Тип',
					'value' => '($data->crazy)?"Бешенство":"Обычная"',
					'type' => 'raw'
				),
				array(
					'name'=>'Сделано',
					'value' => '($data->complete)?"Не сделано":"Сделано"',
					'type' => 'raw'
				),
				array(
					'name'=>'Владелец',
					'value' => '$data->animal->master->lastname',
					'type' => 'raw'
				),				
				array(
					'name'=>'Описание',
					'value' => '$data->description',
					'type' => 'raw'
				),	
    		),
		));
	?>
</div>
<div class="print-button">
	<?php echo CHtml::link('Печать', 
				array(Yii::app()->request->pathInfo,'report_priv'=>$_POST['report_priv'])); ?>
</div>