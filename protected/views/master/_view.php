<?php
/* @var $this MasterController */
/* @var $data Master */
?>

<div class="view">
	<div class="view-fio">
		<?php $fio = CHtml::encode($data->lastname)." ".
			  		 CHtml::encode($data->firstname)." ".
			  		 CHtml::encode($data->surname);
			  
			  echo CHtml::link($fio, array('view', 'id'=>$data->id_master));		 
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
		<?php echo CHtml::link("<i class='icon-edit'></i>", array('update', 'id'=>$data->id_master)); ?>
		<?php echo CHtml::link("<i class='icon-remove'></i>", 
								"#", 
								array('submit'=>array('delete', 'id'=>$data->id_master),
								'confirm'=>'Вы уверены?')); ?>
	</div>	
</div>