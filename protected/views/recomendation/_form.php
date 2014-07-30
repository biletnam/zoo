<?php
/* @var $this CureController */
/* @var $model Cure */
/* @var $form CActiveForm */
//echo "<pre>";
//echo var_dump($anemnes);
//echo "</pre>";
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cure-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля со знаком <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_anemnes'); ?>
		<?php //echo $form->hiddenField($model,'id_anemnes'); ?>
		<?php //echo $form->error($model,'id_anemnes'); ?>
		<?php if ($model->isNewRecord): ?>
			<input id="Recomendation_id_anemnes" type="hidden" name="Recomendation[id_anemnes]" value="<?php echo $anemnes; ?>"></input>
		<?php else: ?>
			<input id="Recomendation_id_anemnes" type="hidden" name="Recomendation[id_anemnes]" value="<?php echo $model->id_anemnes; ?>"></input>
		<?php endif; ?>	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rp'); ?>
		<?php echo $form->textArea($model,'rp',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ds'); ?>
		<?php echo $form->textArea($model,'ds',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ds'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->