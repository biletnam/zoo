<?php
/* @var $this TypeController */
/* @var $data Type */
?>

<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_type')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_type), array('view', 'id'=>$data->id_type)); ?>
	<br />
	*/ 
	?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_type)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>