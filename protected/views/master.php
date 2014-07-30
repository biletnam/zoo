<?php
/* @var $this MasterController */
/* @var $model Master */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-master-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname'); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname'); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname'); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street'); ?>
		<?php echo $form->textField($model,'street'); ?>
		<?php echo $form->error($model,'street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_home'); ?>
		<?php echo $form->textField($model,'n_home'); ?>
		<?php echo $form->error($model,'n_home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_apart'); ?>
		<?php echo $form->textField($model,'n_apart'); ?>
		<?php echo $form->error($model,'n_apart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_1'); ?>
		<?php echo $form->textField($model,'telephone_1'); ?>
		<?php echo $form->error($model,'telephone_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_2'); ?>
		<?php echo $form->textField($model,'telephone_2'); ?>
		<?php echo $form->error($model,'telephone_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_3'); ?>
		<?php echo $form->textField($model,'telephone_3'); ?>
		<?php echo $form->error($model,'telephone_3'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->