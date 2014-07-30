<?php
/* @var $this AnemnesController */
/* @var $model Anemnes */
/* @var $form CActiveForm */
//var_dump($form);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anemnes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 
//echo "<pre>";
//var_dump($model);
//echo "</pre>";
?>

	<p class="note">Поля со знаком <span class="required">*</span> обязательны для заполнения</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php //echo $form->textField($model,'date'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	    			'model' => $model,
	    			'attribute' => 'date',
	    			'language' => 'ru',
	    			'htmlOptions' => array(
	        			'size' => '10',         		// textField size
	        			'maxlength' => '10',    		// textField maxlength
	        			'dateFormat' => 'dd-mm-yyyy',
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
		<?php echo $form->labelEx($model,'description'); ?>
		<?php //echo $form->textField($model,'description'); ?>
		<?php echo $form->textArea($model,'description',
									array('maxlength' => 5000, 'rows' => 10, 'cols' => 50, 'required'=>'require')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'summ'); ?>
		<?php echo $form->textField($model,'summ',array('options'=>array('pattern'=>'^[-+]?\d+(\,\d+)?$'))); ?>
		<?php echo $form->error($model,'summ'); ?>
	</div>

	
	<div class="row">
		<?php if (!$model->isNewRecord): ?>
		<?php echo $form->hiddenField($model,'id_anemnes'); ?>		
		<?php endif; ?>
	</div>
	

	<div class="row">
		<?php if ($model->isNewRecord): ?>
			<input id="Anemnes_id_animal" type="hidden" name="Anemnes[id_animal]" value="<?php echo $animal; ?>"></input>
		<?php else: ?>
			<input id="Anemnes_id_animal" type="hidden" name="Anemnes[id_animal]" value="<?php echo $model->id_animal; ?>"></input>
		<?php endif; ?>	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_medic'); ?>
		<?php $list = CHtml::listData(Medic::model()->findAll(),'id_medic', 'lastname'); ?>
		<?php //var_dump($model->id_medic);?>
		<?php echo $form->dropDownList(Anemnes::model(),'id_medic',$list, 
							array('options'=>array($model->id_medic=>array('selected'=>true,)))
							); ?>
		<?php echo $form->error($model,'id_medic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temperature'); ?>
		<?php echo $form->textField($model,'temperature',array('options'=>array('pattern'=>'^[-+]?\d+(\,\d+)?$'))); ?>
		<?php echo $form->error($model,'temperature'); ?>
	</div>

	<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'color_sl'); ?>
		<?php //echo $form->textField($model,'color_sl'); ?>
		<?php echo $form->textArea($model,'color_sl',
									array('maxlength' => 1000, 'rows' => 10, 'cols' => 50)); ?>
		<?php echo $form->error($model,'color_sl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skin'); ?>
		<?php //echo $form->textField($model,'skin'); ?>
		<?php echo $form->textArea($model,'skin',
									array('maxlength' => 1000, 'rows' => 10, 'cols' => 50)); ?>
		<?php echo $form->error($model,'skin'); ?>
	</div> */?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->