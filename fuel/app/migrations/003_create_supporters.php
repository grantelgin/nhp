<?php

namespace Fuel\Migrations;

class Create_supporters
{
	public function up()
	{
		\DBUtil::create_table('supporters', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'supporter_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'desc' => array('constraint' => 255, 'type' => 'varchar'),
			'graphic_src' => array('constraint' => 255, 'type' => 'varchar'),
			'supporter_link' => array('constraint' => 255, 'type' => 'varchar'),
			'contactName' => array('constraint' => 255, 'type' => 'varchar'),
			'contactEmail' => array('constraint' => 255, 'type' => 'varchar'),
			'contactPhone' => array('constraint' => 255, 'type' => 'varchar'),
			'contactAddress' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('supporters');
	}
}