<?php 
$dataProvider=new CArrayDataProvider($animals,array(
		'id' => 'id_animal',
		'keyField' => 'id_animal',
	));

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_animals',
	'summaryText' => 'Показано с {start} по {end} из {count} записей',
));
