<?php
/* @var $this MedicController */
/* @var $data Medic */
?>

<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medic')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medic), array('view', 'id'=>$data->id_medic)); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work')); ?>:</b>
	<?php echo CHtml::encode($data->work); ?>
	<br />
	*/?>

	<div class="view-medic">
		<?php $fio = CHtml::encode($data->lastname)." ".
					 CHtml::encode($data->firstname)." ".
					 CHtml::encode($data->surname); 
		?>
		<?php echo CHtml::link($fio, array('view', 'id'=>$data->id_medic)); ?>
	</div>
	<div class="view-medic-work">
		<?php echo CHtml::encode($data->work); ?>
	</div>


</div>