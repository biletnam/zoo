<?php
/* @var $this AnimalController */
/* @var $model Animal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'animal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля со знаком <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array(
								'required'=>'require', 'size'=>60,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_type'); ?>
		<?php $list = CHtml::listData(Type::model()->findAll(),'id_type', 'name');?>
		<?php echo $form->dropDownList(Animal::model(),'id_type',$list, array(
									'options'=>array(
												$model->id_type=>array(
															'selected'=>'selected')))
										); ?>
		<?php echo $form->error($model,'id_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php if ($model->isNewRecord): ?>
			<input id="Animal_sex" type="checkbox" name="Animal[sex]" value="0" /> Мужской
			<input id="Animal_sex" type="checkbox" name="Animal[sex]" value="1" /> Женский
		<?php else: ?>
			<?php if ($model->sex): ?>	
				<input id="Animal_sex" type="checkbox" name="Animal[sex]" value="0" /> Мужской
				<input id="Animal_sex" type="checkbox" name="Animal[sex]" value="1" checked/> Женский
			<?php else: ?>	
				<input id="Animal_sex" type="checkbox" name="Animal[sex]" value="0" checked/> Мужской
				<input id="Animal_sex" type="checkbox" name="Animal[sex]" value="1" /> Женский
			<?php endif; ?>	
		<?php endif; ?>
	</div>

	<?php if ($model->isNewRecord): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo "<div id='age_display' style='display:box;'>"; ?>
		<?php echo "<div id='age_display_year'><span>".$model->getAge('year')."</span> лет</div>"; ?>
		<?php echo "<div id='age_display_month'><span>".$model->getAge('month')."</span> месяцев</div>"; ?>
		<?php echo "</div>"; ?>
		<?php echo "<div id='age_button' style='display:box;height:20px;width:20px;background-color:red;cursor:point;'>Изменить</div>"; ?>
		<?php echo $form->hiddenField($model,'age', $age); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>
	<?php endif; ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_num'); ?>
		<?php echo $form->textField($model,'reg_num',array(
									'size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'reg_num'); ?>
	</div>

	<?php if ($model->isNewRecord): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'date_reg'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	    			'model' => $model,
	    			'attribute' => 'date_reg',
	    			'language' => 'ru',
	    			'htmlOptions' => array(
	        			'size' => '10',         		// textField size
	        			'maxlength' => '10',    		// textField maxlength
	        			//'dateFormat' => 'yyyy-mm-dd',
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
		<?php echo $form->error($model,'date_reg'); ?>
	</div>
	<?php endif; ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date_death'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	    			'model' => $model,
	    			'attribute' => 'date_death',
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
		<?php echo $form->error($model,'date_death'); ?>
	</div>

	<div class="row">
		<?php if ($model->isNewRecord): ?>
			<input id="Animal_id_master" type="hidden" name="Animal[id_master]" value="<?php echo $master; ?>"></input>
		<?php else: ?>
			<input id="Animal_id_master" type="hidden" name="Animal[id_master]" value="<?php echo $model->id_master; ?>"></input>
		<?php endif; ?>	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array(
												'rows'=>5, 'cols'=>45, 'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<div id="age_dialog" title="Возраст" style="display:none">
  <div>	
  		<span>Месяцев</span><input type="number" id="age_month" value="0" />
  </div>
  <div>
  		<span>Лет</span><input type="number" id="age_year" value="0" />
  </div>
</div>
