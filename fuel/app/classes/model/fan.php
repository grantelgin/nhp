<?php
use Orm\Model;

class Model_Fan extends Model
{
	protected static $_properties = array(
		'id',
		'fan_id',
		'fanemail',
		'fanfirstname',
		'fanlastname',
		'fanphone',
		'fanaddress',
		'fangraphic_src',
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
		/* $val->add_field('fan_id', 'Fan Id', 'required|valid_string[numeric]'); */
		$val->add_field('fanemail', 'Fanemail', 'valid_email');
		//$val->add('email', 'Email address')->add_rule('match_value', 'me@mydomain.com', true)->add_rule('valid_email');
		/*
$val->add_field('fanfirstname', 'Fanfirstname', 'required|max_length[255]');
		$val->add_field('fanlastname', 'Fanlastname', 'required|max_length[255]');
		$val->add_field('fanphone', 'Fanphone', 'required|max_length[255]');
		$val->add_field('fanaddress', 'Fanaddress', 'required|max_length[255]');
		$val->add_field('fangraphic_src', 'Fangraphic Src', 'required|max_length[255]');
*/

		return $val;
	}

}
