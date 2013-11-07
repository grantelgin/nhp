<?php
use Orm\Model;

class Model_EventFan extends Model
{
	protected static $_properties = array(
		'id',
		'eventfan_id',
		'event_id',
		'fan_id',
		'updateviaemail',
		'didattendevent',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('eventfan_id', 'Eventfan Id', 'required|valid_string[numeric]');
		$val->add_field('event_id', 'Event Id', 'required|valid_string[numeric]');
		$val->add_field('fan_id', 'Fan Id', 'required|valid_string[numeric]');
		$val->add_field('updateviaemail', 'Updateviaemail', 'required');
		$val->add_field('didattendevent', 'Didattendevent', 'required');

		return $val;
	}

}
