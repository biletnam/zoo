<?php
/* @var $this MasterController */
/* @var $data Master */
?>

<div class="view">
	<?php /*
	<div>
		<b><?php echo CHtml::encode($data->getAttributeLabel('id_master')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->id_master), array('view', 'id'=>$data->id_master)); ?>	
	</div>
	*/?>
	<div class="view-fio">
		<?php $fio = CHtml::encode($data->lastname)." ".
			  		 CHtml::encode($data->firstname)." ".
			  		 CHtml::encode($data->surname);
			  
			  echo CHtml::link(CHtml::encode($fio), array('view', 'id'=>$data->id_master));		 
		?>	
	</div>
	<div class="view-home">
		<?php echo CHtml::encode($data->city)." ";
			echo "вул. ".CHtml::encode($data->street).", ";
			echo "буд. ".CHtml::encode($data->n_home).", ";
			echo ($data->n_apart) ? "кв. ".CHtml::encode($data->n_apart) : "";			
		?>	
	</div>
	<div class="view-count">
		<?php echo CHtml::encode(count(Animal::model()->findAllByAttributes(array('id_master'=>$data->id_master)))." животных"); ?>
	</div>
	<div class="view-buttons">
		<?php echo CHtml::link(CHtml::encode("Изменить"), array('update', 'id'=>$data->id_master)); ?>
		<?php echo CHtml::link(CHtml::encode("Удалить"), array('delete', 'id'=>$data->id_master)); ?>
	</div>	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_master), array('view', 'id'=>$data->id_master)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_home')); ?>:</b>
	<?php echo CHtml::encode($data->n_home); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('n_apart')); ?>:</b>
	<?php echo CHtml::encode($data->n_apart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone_1')); ?>:</b>
	<?php echo CHtml::encode($data->telephone_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone_2')); ?>:</b>
	<?php echo CHtml::encode($data->telephone_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone_3')); ?>:</b>
	<?php echo CHtml::encode($data->telephone_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	*/ ?>

</div>