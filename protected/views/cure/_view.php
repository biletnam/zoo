<?php
/* @var $this CureController */
/* @var $data Cure */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cure')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cure), array('view', 'id'=>$data->id_cure)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_anemnes')); ?>:</b>
	<?php echo CHtml::encode($data->id_anemnes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp')); ?>:</b>
	<?php echo CHtml::encode($data->rp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds')); ?>:</b>
	<?php echo CHtml::encode($data->ds); ?>
	<br />


</div>