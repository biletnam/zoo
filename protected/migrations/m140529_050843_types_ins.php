<?php

class m140529_050843_types_ins extends CDbMigration
{
	public function up()
	{
		$this->insert('types', array(
				'name' => 'Собака',
				'description' => '',
			));
		$this->insert('types', array(
				'name' => 'Кот',
				'description' => '',
			));
		$this->insert('types', array(
				'name' => 'Корова',
				'description' => '',
			));
		$this->insert('types', array(
				'name' => 'Коза',
				'description' => '',
			));
		$this->insert('types', array(
				'name' => 'Овца',
				'description' => '',
			));
	}

	public function down()
	{
		echo "m140529_050843_types_ins does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}