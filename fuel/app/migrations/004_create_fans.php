<?php

namespace Fuel\Migrations;

class Create_fans
{
	public function up()
	{
		\DBUtil::create_table('fans', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'fan_id' => array('constraint' => 11, 'type' => 'int'),
			'fanEmail' => array('constraint' => 255, 'type' => 'varchar'),
			'fanFirstName' => array('constraint' => 255, 'type' => 'varchar'),
			'fanLastName' => array('constraint' => 255, 'type' => 'varchar'),
			'fanPhone' => array('constraint' => 255, 'type' => 'varchar'),
			'fanAddress' => array('constraint' => 255, 'type' => 'varchar'),
			'fanGraphic_src' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('fans');
	}
}