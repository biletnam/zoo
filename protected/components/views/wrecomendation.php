<?php 

	echo $this->name;
	echo "<table>";
	foreach ($this->data as $c) {
		echo "<tr class='odd'>";			
			echo "<td>R.P.</td>";
			echo "<td>{$c->rp}</td>";
			echo "<td>";
				echo CHtml::link(CHtml::image('/assets/7c50ae81/gridview/update.png','Изменить'), array('recomendation/update', 'id'=>$c->id_recomendation));
				echo CHtml::link(CHtml::image('/assets/7c50ae81/gridview/delete.png','Удалить'), array('recomendation/delete', 'id'=>$c->id_recomendation));				
			echo "</td>";
		echo "</tr>";
		echo "<tr class='ev'>";			
			echo "<td>D.S.</td>";
			echo "<td>{$c->ds}</td>";
			echo "<td></td>";
		echo "</tr>";
	}

	echo "</table>";

	echo CHtml::link(CHtml::encode("Добавить рекомендацию"), 
						array('recomendation/create', 'id_anemnes'=>$this->id_anemnes,),array('class'=>'btn btn-success'));
