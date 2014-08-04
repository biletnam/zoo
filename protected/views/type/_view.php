<?php
/* @var $this TypeController */
/* @var $data Type */
?>

<div class="view">

	<div class="type-name">
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_type)); ?>
	</div>

	<div class="type-description">
		<?php echo CHtml::encode($data->description); ?>
	</div>

	<div class="view-buttons">
		<?php echo CHtml::link("<i class='icon-edit'></i>", array('update', 'id'=>$data->id_type)); ?>
		<?php echo CHtml::link("<i class='icon-remove'></i>", array('delete', 'id'=>$data->id_type)); ?>
	</div>	


</div>