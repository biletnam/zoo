<?php
/* @var $this ReportController */

/*$this->breadcrumbs=array(
	'Отчеты',
);*/
?>
<h1>Отчеты</h1>

<h3>Количество зарегистрированных животных</h3>
<div class="form_countanimal">
	<?php $form = $this->beginWidget('CActiveForm', array(
											'action'=>$this->createUrl('report/countanimal')
										)); ?>

	<label for="report_all">Все животные</label>
	<input type="radio" checked="checked" name="report_type" id="report_all" value="all"/>
	<label for="report_life">Живые животные</label>
	<input type="radio" name="report_type" id="report_life" value="life"/>
	<label for="report_death">Умершие животные</label>
	<input type="radio" name="report_type" id="report_death" value="death"/>

	<div class="row submit">
		<?php echo CHtml::submitButton('Сформировать'); ?>
	</div>

	<?php $this->endWidget(); ?>
</div><!-- form -->

<h3>Типы животных</h3>
<div class="form_type">
	<?php $form = $this->beginWidget('CActiveForm', array(
											'action'=>$this->createUrl('report/type')
										)); ?>

	<?php echo CHtml::listBox('report_type','type',CHtml::listData(Type::model()->findAll(),'id_type','name'),
										array('id'=>'report_type','empty'=>array('Все виды'),
										'options'=>array(0=>array('selected'=>'selected'))));?>

	<div class="row submit">
		<?php echo CHtml::submitButton('Сформировать'); ?>
	</div>

	<?php $this->endWidget(); ?>
</div><!-- form -->

<h3>Прививки</h3>
<div>
	<div class="form_priv">
	<?php $form = $this->beginWidget('CActiveForm', array(
											'action'=>$this->createUrl('report/priv')
										)); ?>

	<label for="report_priv_all">Все прививки</label>
	<input type="radio" checked="checked" name="report_priv" id="report_priv_all" value="all"/>
	<label for="report_priv_d">Обычные привики</label>
	<input type="radio" name="report_priv" id="report_priv_d" value="d"/>
	<label for="report_priv_crazy">Прививки от бешенства</label>
	<input type="radio" name="report_priv" id="report_priv_crazy" value="crazy"/>

	<div class="row submit">
		<?php echo CHtml::submitButton('Сформировать'); ?>
	</div>

	<?php $this->endWidget(); ?>
</div><!-- form -->
</div>
