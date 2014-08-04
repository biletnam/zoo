<?php
/* @var $this MedicController */
/* @var $data Medic */
?>

<div class="view">

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

	<div class="view-buttons">
		<?php echo CHtml::link("<i class='icon-edit'></i>", array('update', 'id'=>$data->id_medic)); ?>
		<?php echo CHtml::link("<i class='icon-remove'></i>", array('delete', 'id'=>$data->id_medic)); ?>
	</div>	


</div>