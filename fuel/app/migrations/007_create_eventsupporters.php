<?php

namespace Fuel\Migrations;

class Create_eventsupporters
{
	public function up()
	{
		\DBUtil::create_table('eventsupporters', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'eventSupporter_id' => array('constraint' => 11, 'type' => 'int'),
			'event_id' => array('constraint' => 11, 'type' => 'int'),
			'supporter_id' => array('constraint' => 11, 'type' => 'int'),
			'showOnEvent' => array('type' => 'tinyint'),
			'eventPosition' => array('constraint' => 11, 'type' => 'int'),
			'updateViaEmail' => array('type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('eventsupporters');
	}
}