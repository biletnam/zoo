<h1>Прививки</h1>
<?php var_dump($dataProvider);?>
<div id="report_priv">
	<?php  
		$this->widget('zii.widgets.grid.CGridView', array(
    		'id' => 'grid-priv',
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