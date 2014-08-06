<?php
/* @var $this PrivController */
/* @var $model Priv */
/* @var $form CActiveForm */
//var_dump($model);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'priv-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля со знаком <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	    			'model' => $model,
	    			'attribute' => 'date',
	    			'language' => 'ru',
	    			'htmlOptions' => array(
	        			'size' => '10',         		// textField size
	        			'maxlength' => '10',    		// textField maxlength
	        			'dateFormat' => 'yy-mm-dd',
	        			'showOtherMonths' => true,      // show dates in other months
				        'selectOtherMonths' => true,    // can seelect dates in other months
				        'changeYear' => true,           // can change year
				        'changeMonth' => true,          // can change month
				        'yearRange' => '2000:2099',     // range of year
				        'minDate' => '2000-01-01',      // minimum date
				        'maxDate' => '2099-12-31',      // maximum date
				        'showButtonPanel' => true,      // show button panel
	    			),
				));
		?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complete'); ?>
		<?php $complete = array('Не сделано','Сделано'); ?>
		<?php echo $form->dropDownList($model,'complete', $complete); ?>
		<?php echo $form->error($model,'complete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'crazy'); ?>
		<?php $crazy = array('Обычная','Бешенство'); ?>
		<?php echo $form->dropDownList($model,'crazy', $crazy); ?>
		<?php echo $form->error($model,'crazy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('size'=>60,'maxlength'=>1000,
															'cols'=>60, 'rows'=>10, 'required'=>'require')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'id_animal', array('value'=>$model->id_animal)); ?>				
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->