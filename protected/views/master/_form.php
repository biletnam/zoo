<?php
/* @var $this MasterController */
/* @var $model Master */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля со знаком <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array(
												'required'=>'require','size'=>100,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array(
												'required'=>'require','size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array(
												'required'=>'require','size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array(
												'required'=>'require','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street'); ?>
		<?php echo $form->textField($model,'street',array(
												'required'=>'require','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_home'); ?>
		<?php echo $form->numberField($model,'n_home',array(
						'min'=>0,'max'=>999, 'required'=>'require')); ?>
		<?php echo $form->error($model,'n_home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_apart'); ?>
		<?php echo $form->numberField($model,'n_apart',array('min'=>0,'max'=>999,)); ?>
		<?php echo $form->error($model,'n_apart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_1'); ?>
		<?php echo $form->textField($model,'telephone_1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telephone_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_2'); ?>
		<?php echo $form->textField($model,'telephone_2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telephone_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_3'); ?>
		<?php echo $form->textField($model,'telephone_3',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telephone_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array(
								 'rows'=>5, 'cols'=>45, 'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class'=>'btn ntn-info')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->