<?php 
	echo "<pre>";
	//CVarDumper::dump($this->data);
	echo "</pre>";
	
	//echo "<form>";
	echo "<table>";

	echo $this->name;

	foreach ($this->data as $c) {
		echo "<tr>";			
			echo "<td>R.P.</td>";
			echo "<td>{$c->rp}</td>";
			echo "<td>";
				echo CHtml::link(CHtml::image('/assets/7c50ae81/gridview/delete.png','Удалить'), array('cure/delete', 'id'=>$c->id_cure));
				echo CHtml::link(CHtml::image('/assets/7c50ae81/gridview/update.png','Изменить'), array('cure/update', 'id'=>$c->id_cure));
			echo "</td>";
		echo "</tr>";
		echo "<tr>";			
			echo "<td>D.S.</td>";
			echo "<td>{$c->ds}</td>";
			echo "<td></td>";
		echo "</tr>";
		echo "<tr  style='display:block;border-bottom:1px solid gray;'>";
			echo "<td collaps=3>";
			echo "</td>";			
		echo "</tr>";
	}

	echo "</table>";

	//eeeeeeeee
	foreach ($this->data as $c) {
		echo "<div class='c_$c->id_anemnes'>";

		echo "</div>";

	}
	//eeeeeeeee

	//echo "</form>";

	echo CHtml::link(CHtml::encode("Добавить лечение"), 
						array('cure/create', 'id_anemnes'=>$this->id_anemnes));

