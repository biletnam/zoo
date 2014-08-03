<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Список владельцев животных'=>array('index'),
	$model->lastname,
);

$this->menu=array(
	//array('label'=>'Список владельцев', 'url'=>array('index')),
	array('label'=>'Добавить нового владельца', 'url'=>array('create')),
	array('label'=>'Добавить животное', 'url'=>array('animal/create','id_master'=>$model->id_master)),
	array('label'=>'Редактировать владельца', 'url'=>array('update', 'id'=>$model->id_master)),
	array('label'=>'Удалить владельца', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_master),'confirm'=>'Вы уверены что хотите удалить данные?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Данные владельца животных</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_master',
		'lastname',
		'firstname',
		'surname',
		'city',
		'street',
		'n_home',
		'n_apart',
		'telephone_1',
		'telephone_2',
		'telephone_3',
		'description',
	),
)); ?>

<div id='animals'>
	<?php if(count($model->animal)>=1): ?>
        <h3>
            <?php echo "Всего животных: ".count($model->animal); ?>
        </h3>
        <?php $this->renderPartial('_animals',array(
            'master'=>$model,
            'animals'=>$model->animal,
        )); ?>
    <?php endif; ?>
</div>