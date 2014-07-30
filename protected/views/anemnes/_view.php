<?php
/* @var $this AnemnesController */
/* @var $data Anemnes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_anemnes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_anemnes), array('view', 'id'=>$data->id_anemnes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('summ')); ?>:</b>
	<?php echo CHtml::encode($data->summ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
	<?php echo CHtml::encode($data->id_animal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medic')); ?>:</b>
	<?php echo CHtml::encode($data->id_medic); ?>
	<br />


</div>