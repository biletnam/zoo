<?php
/* @var $this MasterController */
/* @var $dataProvider CActiveDataProvider */
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

//var_dump(Yii::app()->user->id);
//var_dump(Yii::app()->user->name);
//var_dump(Yii::app()->user->getState('role'));
//Yii::app()->authManager->assign(Yii::app()->user->getState('role'), Yii::app()->user->id);
//var_dump(Yii::app()->authManager->getAuthAssignments( Yii::app()->user->id));
//echo "<pre>";
//CVarDumper::dump(Yii::app()->authManager,20,true);
//echo "</pre>";

/*$this->breadcrumbs=array(
	'Список владельцев животных',
);*/

$this->menu=array(
	array('label'=>'Добавить владельца', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);


echo "<h1>Владельцы животных</h1>";

echo CHtml::link('Поиск','#',array('class'=>'search-button'));
echo "<div class='search-form' style='display:none'>";
	$model_master = new Master("search");
	$model_master->unsetAttributes(); 
	$this->renderPartial('_search_all',array('model'=>$model_master,));
echo "</div>";

 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	//'dataProvider'=>$model->search(),
	'itemView'=>'_view',
	'sortableAttributes'=>array(
        'lastname',
        'city'
    ),
    'sorterHeader'=>'Сортировка',
    'id' => 'masters-list',
    'summaryText' => 'Показано с {start} по {end} из {count} записей',
)); 
