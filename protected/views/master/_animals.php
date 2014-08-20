<?php 

$dataProvider=new CArrayDataProvider($animals,array(
		'id' => 'id_animal',
		'keyField' => 'id_animal',
	));

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_animals',
	'summaryText' => '<small>Показано с <strong>{start}</strong> по <strong>{end}</strong> из <strong>{count}</strong> записей</small>',
));

?>