<?php

namespace Fuel\Migrations;

class Create_eventproducers
{
	public function up()
	{
		\DBUtil::create_table('eventproducers', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'eventProducer_id' => array('constraint' => 11, 'type' => 'int'),
			'event_id' => array('constraint' => 11, 'type' => 'int'),
			'producer_id' => array('constraint' => 11, 'type' => 'int'),
			'showOnEvent' => array('type' => 'tinyint'),
			'eventPosition' => array('constraint' => 11, 'type' => 'int'),
			'updateViaEmail' => array('type' => 'tinyint'),
			'soundCloud_link' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('eventproducers');
	}
}