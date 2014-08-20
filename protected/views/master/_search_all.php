<?php
/* @var $this MasterController */
/* @var $model Master */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl('/search/index'),
	'method'=>'get',
)); 

$model_master = new Master("search");
$model_master->unsetAttributes();

$model_animal = new Animal("search");
$model_animal->unsetAttributes();

?>

	<div class="row">
		<?php echo $form->label($model_master,'lastname'); ?>
		<?php echo $form->textField($model_master,'lastname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_master,'city'); ?>
		<?php echo $form->textField($model_master,'city',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_master,'telephone_1'); ?>
		<?php echo $form->textField($model_master,'telephone_1',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_animal,'name'); ?> <!--animal name-->
		<?php echo $form->textField($model_animal,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row"><!--animal age-->
		<?php echo $form->label($model_animal,'age'); ?>
		<?php echo $form->textField($model_animal,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_animal,'reg_num'); ?>
		<?php echo $form->textField($model_animal,'reg_num',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск',array('class'=>'btn ntn-info')); ?>
		<?php echo CHtml::resetButton('Очистить',array('class'=>'btn ntn-info')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->