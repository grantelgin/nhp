<?php
use Orm\Model;

class Model_Event extends Model
{
	protected static $_properties = array(
		'id',
		'event_id',
		'name',
		'desc',
		'location_id',
		'eventbrite_link',
		'graphic_src',
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
		/* $val->add_field('event_id', 'Event Id', 'required|valid_string[numeric]'); */
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('desc', 'Desc', 'required|max_length[10000]');
		$val->add_field('location_id', 'Location Id', 'required|valid_string[numeric]');
		$val->add_field('eventbrite_link', 'Eventbrite Link', 'required|max_length[255]');
		$val->add_field('graphic_src', 'Graphic Src', 'required|max_length[255]');

		return $val;
	}

}
