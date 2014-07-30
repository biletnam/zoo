<?php
/* @var $this PrivController */
/* @var $data Priv */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_priv')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_priv), array('view', 'id'=>$data->id_priv)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
	<?php echo CHtml::encode($data->id_animal); ?>
	<br />


</div>