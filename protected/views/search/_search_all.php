<?php
/* @var $this MasterController */
/* @var $model Master */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	//'action'=>Yii::app()->createUrl($this->route),
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

	<div class="row"><!--animal sex-->
		<?php echo $form->label($model_animal,'sex'); ?>
		<?php echo $form->textField($model_animal,'sex'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'id_type'); ?>
		<?php //echo $form->textField($model,'id_type'); ?>
	</div>

	<div class="row"><!--animal age-->
		<?php echo $form->label($model_animal,'age'); ?>
		<?php echo $form->textField($model_animal,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_animal,'reg_num'); ?>
		<?php echo $form->textField($model_animal,'reg_num',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_animal,'date_reg'); ?>
		<?php echo $form->textField($model_animal,'date_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model_animal,'date_death'); ?>
		<?php echo $form->textField($model_animal,'date_death'); ?>
	</div>

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
		<?php echo CHtml::resetButton('Очистить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->