<?php
use Orm\Model;

class Model_Supporter extends Model
{
	protected static $_properties = array(
		'id',
		'supporter_id',
		'name',
		'desc',
		'graphic_src',
		'supporter_link',
		'contactname',
		'contactemail',
		'contactphone',
		'contactaddress',
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
		$val->add_field('supporter_id', 'Supporter Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('desc', 'Desc', 'required|max_length[255]');
		$val->add_field('graphic_src', 'Graphic Src', 'required|max_length[255]');
		$val->add_field('supporter_link', 'Supporter Link', 'required|max_length[255]');
		$val->add_field('contactname', 'Contactname', 'required|max_length[255]');
		$val->add_field('contactemail', 'Contactemail', 'required|max_length[255]');
		$val->add_field('contactphone', 'Contactphone', 'required|max_length[255]');
		$val->add_field('contactaddress', 'Contactaddress', 'required|max_length[255]');

		return $val;
	}

}
