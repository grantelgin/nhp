<?php

namespace Fuel\Migrations;

class Create_eventfans
{
	public function up()
	{
		\DBUtil::create_table('eventfans', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'eventFan_id' => array('constraint' => 11, 'type' => 'int'),
			'event_id' => array('constraint' => 11, 'type' => 'int'),
			'fan_id' => array('constraint' => 11, 'type' => 'int'),
			'updateViaEmail' => array('type' => 'tinyint'),
			'didAttendEvent' => array('type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('eventfans');
	}
}