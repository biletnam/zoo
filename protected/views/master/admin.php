<?php
/* @var $this MasterController */
/* @var $model Master */

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
?>

<h1>Управление</h1>

<p>
Вы можете дополнительно ввести оператор сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начале каждого из ваших критериев поиска.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_master',
		'firstname',
		'surname',
		'lastname',
		'city',
		'street',
		'n_home',
		'n_apart',
		/*
		'telephone_1',
		'telephone_2',
		'telephone_3',
		'description',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
	'summaryText' => 'Показано с {start} по {end} из {count} записей',
)); ?>
