<?php
/* @var $this RecomendationController */
/* @var $model Recomendation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_recomendation'); ?>
		<?php echo $form->textField($model,'id_recomendation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_anemnes'); ?>
		<?php echo $form->textField($model,'id_anemnes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp'); ?>
		<?php echo $form->textArea($model,'rp',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ds'); ?>
		<?php echo $form->textArea($model,'ds',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->