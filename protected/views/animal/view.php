<?php
/* @var $this AnimalController */
/* @var $model Animal */

$this->breadcrumbs=array(
	'Данные владельца животного'=>array('/master/view&id='.$model->master->id_master),
	$model->name,
);

$this->menu=array(
	//array('label'=>'Список животных', 'url'=>array('index')),
	array('label'=>'Добавить новое животное', 'url'=>array('/animal/create&id_master='.$model->master->id_master)),
	array('label'=>'Добавить анемнез', 'url'=>array('/anemnes/create&id_animal='.$model->id_animal)),
	array('label'=>'Добавить прививку', 'url'=>array('/priv/create&id_animal='.$model->id_animal)),
	array('label'=>'Изменить данные животного', 'url'=>array('update', 'id'=>$model->id_animal)),
	array('label'=>'Удалить животное', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_animal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h3>Данные животного <?php echo CHtml::encode(
							($model->date_death != "00-00-0000")?"(умер)":""
						); ?>
</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		array(
			'label'=>'Вид',
			'value' => $model->type->name,
		),
		array(
			'label'=>'Пол',
			'value' => ($model->sex)?'Женский':'Мужской',
		),
		'reg_num',
		array(
			'label'=>'Дата регистрации',
			'value' => date('d-m-Y', strtotime(str_replace("/","-",$model->date_reg))),
		),
		array(
			'label'=>'Возраст',
			'value' => 'лет '.floor($model->age/12).', месяцев '.$model->age%12,
		),
		array(
			'label'=>'Дата падежа',
			'value' => ($model->date_death != "00-00-0000") ? date('d-m-Y', strtotime(str_replace("/","-",$model->date_death))):"-",
		),
		array(
			'label'=>'Владелец',
			'value' => $model->master->lastname,
		),
		'description',
	),
)); ?>
<hr>
<div id='anemnes-grid'>
	
	<?php if(count($model->anemnes)>=1): ?>
		<div class="grid-name"><h4>Анамнезы</h4></div>
        <span>
            <?php echo "всего: ".count($model->anemnes); ?>
        </span>
 
        <?php $this->renderPartial('_anemnes',array(
            'anemnes'=>$model->anemnes,
            'animal'=>$model->id_animal,
        )); ?>
    <?php endif; ?>
</div>
<hr>

<div id='priv-grid'>
	<?php if(count($model->priv)>=1): ?>
		<div class="grid-name"><h4>Прививки</h4></div>
        <span>
            <?php echo "всего: ".count($model->priv); ?>
        </span>
 
        <?php $this->renderPartial('_priv',array(
            'priv'=>$model->priv,
            'animal'=>$model->id_animal,
        )); ?>
    <?php endif; ?>
</div>
<hr>