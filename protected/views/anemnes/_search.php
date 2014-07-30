<?php
/* @var $this AnemnesController */
/* @var $model Anemnes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_anemnes'); ?>
		<?php echo $form->textField($model,'id_anemnes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'summ'); ?>
		<?php echo $form->textField($model,'summ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_animal'); ?>
		<?php echo $form->textField($model,'id_animal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_medic'); ?>
		<?php echo $form->textField($model,'id_medic'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->