<?php
use Orm\Model;

class Model_Producer extends Model
{
	protected static $_properties = array(
		'id',
		'producer_id',
		'name',
		'email',
		'phone',
		'desc',
		'address',
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
		/*
$val->add_field('producer_id', 'Producer Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
*/
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		/*
$val->add_field('phone', 'Phone', 'required|max_length[255]');
		$val->add_field('desc', 'Desc', 'required|max_length[255]');
		$val->add_field('address', 'Address', 'required|max_length[255]');
		$val->add_field('graphic_src', 'Graphic Src', 'required|max_length[255]');
*/

		return $val;
	}

}
