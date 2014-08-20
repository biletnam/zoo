<?php
/* @var $this MasterController */
/* @var $dataProvider CActiveDataProvider */
Yii::app()->clientScript->registerScript('load',
				"$('#search-button').addClass('search-button btn btn-info')",
				CClientScript::POS_END);

Yii::app()->clientScript->registerScript('search', "
$('#search-button').click(function(){
	$('.search-form').toggle(500);
	$(this).toggleClass('search-button btn btn-info','search-button btn btn-success');
	/*$(this).toggle(function(){
		$(this).removeClass('search-button btn btn-info').addClass('search-button btn btn-success');
	},function(){
		$(this).removeClass('search-button btn btn-success').addClass('search-button btn btn-info');
	});*/
	
	return false;
});
$('.search-form form').submit(function(){
	$('#master-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");


$this->menu=array(
	array('label'=>'Добавить владельца', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);


echo "<h3>Владельцы животных</h3>";

echo CHtml::link('Поиск','#', array('id'=>'search-button'));
echo "<div class='search-form' style='display:none'>";
	$model_master = new Master("search");
	$model_master->unsetAttributes(); 
	$this->renderPartial('_search_all',array('model'=>$model_master,));
echo "</div>";

 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array(
        'lastname',
        'city'
    ),
    'sorterHeader'=>'<small>Сортировка:</small>',
    'id' => 'masters-list',
    'summaryText' => '<small>Показано с <strong>{start}</strong> по <strong>{end}</strong> из <strong>{count}</strong> записей</small>',
)); 
