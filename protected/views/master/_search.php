<?php
/* @var $this MasterController */
/* @var $model Master */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php /*
	<div class="row">
		<?php echo $form->label($model,'id_master'); ?>
		<?php echo $form->textField($model,'id_master'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	*/?>
	<div class="row">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<?php /*
	<div class="row">
		<?php echo $form->label($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_home'); ?>
		<?php echo $form->textField($model,'n_home',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_apart'); ?>
		<?php echo $form->textField($model,'n_apart'); ?>
	</div>
	*/?>
	<?php /*
	<div class="row">
		<?php echo $form->label($model,'telephone_1'); ?>
		<?php echo $form->textField($model,'telephone_1',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'telephone_2'); ?>
		<?php echo $form->textField($model,'telephone_2',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telephone_3'); ?>
		<?php echo $form->textField($model,'telephone_3',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	*/?>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->