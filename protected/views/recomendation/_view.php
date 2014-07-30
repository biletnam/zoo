<?php
/* @var $this RecomendationController */
/* @var $data Recomendation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_recomendation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_recomendation), array('view', 'id'=>$data->id_recomendation)); ?>
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