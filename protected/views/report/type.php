<h1></h1>

<?php 
//echo "<pre>";
//var_dump($dataProvider->rawData[0]->date_death);
//echo "</pre>";?>
<div id="report_animals">
	<?php  
		$this->widget('zii.widgets.grid.CGridView', array(
    		'id' => 'grid-animals-type',
    		'dataProvider' =>$dataProvider,
    		'columns' => array(
    			array(
    				'name' => 'Кличка',
    				'value'=> '$data->name',
    				'type' => 'raw'
    			),
    			array(
    				'name' => 'Владелец',
    				'value'=> '$data->master->lastname',
    				'type' => 'raw'
    			),
    			array(
					'name'=>'Пол',
					'value' => ($data->sex)?'Женский':'Мужской',
					'type' => 'raw'
				),
				array(
					'name'=>'Вид',
					'value' => '$data->type->name',
					'type' => 'raw'
				),
				array(
					'name'=>'Регистрационный номер',
					'value' => '$data->reg_num',
					'type' => 'raw'
				),
				array(
					'name'=>'Дата регистрации',
					'value' => '$data->date_reg',
					'type' => 'raw'
				),
				array(
					'name'=>'Дата падежа',
					'value' => ($data->date_death === '00-00-0000')?'-':'$data->date_death',
					'type' => 'raw'
				),
    		),
		));
	?>
</div>