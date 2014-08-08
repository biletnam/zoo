<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	//'Users'=>array('index'),
	'Управление пользователями',
);

/*$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Управление пользователями</h3>



<?php echo CHtml::link('Поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_user',
		'login',
		'lastname',
		'firstname',
		'surname',
		
		//'password',
		
		'description',
		//'id_medic',
		'role',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<div>
	<?php echo CHtml::link(CHtml::encode("Добавить пользователя"), 
						array('create'),array('class'=>'btn btn-success'));
	?>
</div> 
