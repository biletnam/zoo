<div class="view">

	<div class="view-name">
		<?php $name = CHtml::encode($data->name);			  
			  echo CHtml::link(CHtml::encode($name), array('animal/view', 'id'=>$data->id_animal));		 
		?>	
	</div>
	<div class="view-type">
		<?php echo CHtml::encode($data->type->name); ?>
	</div>
	<div class="view-date">
		<?php echo "Дата регистрации: ".CHtml::encode($data->date_reg); ?>
	</div>
	<div class="view-date">
		<?php
			if ($data->date_death != '00-00-0000') {
				echo CHtml::encode("Дата падежа: ".$data->date_death);
			}
		?>
	</div>
	<div class="view-buttons">
		<?php echo CHtml::link("<i class='icon-edit'></i>", array('animal/update', 'id'=>$data->id_animal)); ?>
		<?php echo CHtml::link("<i class='icon-remove'></i>", array('animal/delete', 'id'=>$data->id_animal)); ?>
	</div>	
</div>