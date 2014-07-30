<div class="view">

	<?php /*
	<div>
		<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->id_animal), array('animal/view', 'id'=>$data->id_animal)); ?>	
	</div>
	*/?>
	<div class="view-name">
		<?php $name = CHtml::encode($data->name);			  
			  echo CHtml::link(CHtml::encode($name), array('animal/view', 'id'=>$data->id_animal));		 
		?>	
	</div>
	<div class="view-type">
		<?php echo CHtml::encode($data->type->name); ?>
	</div>
	<div class="view-date">
		<?php echo CHtml::encode($data->date_reg); ?>
	</div>
	<div class="view-date">
		<?php
			if ($data->date_death != '00-00-0000') {
				echo CHtml::encode("Падеж ".$data->date_death);
			}
		?>
	</div>
	<div class="view-buttons">
		<?php echo CHtml::link(CHtml::encode("Изменить"), array('animal/update', 'id'=>$data->id_animal)); ?>
		<?php echo CHtml::link(CHtml::encode("Удалить"), array('animal/delete', 'id'=>$data->id_animal)); ?>
	</div>	

<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_animal), 
					array('animal/view', 'id'=>$data->id_animal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_type')); ?>:</b>
	<?php echo CHtml::encode($data->id_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_num')); ?>:</b>
	<?php echo CHtml::encode($data->reg_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_reg')); ?>:</b>
	<?php echo CHtml::encode($data->date_reg); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_death')); ?>:</b>
	<?php echo CHtml::encode($data->date_death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_anemnes')); ?>:</b>
	<?php echo CHtml::encode($data->id_anemnes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_priv')); ?>:</b>
	<?php echo CHtml::encode($data->id_priv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master')); ?>:</b>
	<?php echo CHtml::encode($data->id_master); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	*/ ?>

</div>