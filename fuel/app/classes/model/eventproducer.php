<?php
use Orm\Model;

class Model_EventProducer extends Model
{
	protected static $_properties = array(
		'id',
		'event_id',
		'producer_id',
		'showonevent',
		'eventposition',
		'updateviaemail',
		'soundcloud_link',
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
		/* $val->add_field('eventproducer_id', 'Eventproducer Id', 'required|valid_string[numeric]'); */
		$val->add_field('event_id', 'Event Id', 'required|valid_string[numeric]');
		$val->add_field('producer_id', 'Producer Id', 'required|valid_string[numeric]');
		$val->add_field('showonevent', 'Showonevent', 'required');
		$val->add_field('eventposition', 'Eventposition', 'required|valid_string[numeric]');
		$val->add_field('updateviaemail', 'Updateviaemail', 'required');
		$val->add_field('soundcloud_link', 'Soundcloud Link', 'required|max_length[255]');

		return $val;
	}

}
