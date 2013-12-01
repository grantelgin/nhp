<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Fan::validate('addFan');
			
			if ($val->run())
			{
				$fan = Model_Fan::forge(array(
					'fanemail' => Input::post('fanemail'),
				));

				if ($fan and $fan->save())
				{
					Session::set_flash('success', 'We will send an email to '.$fan->fanemail.' with updates soon.');

					Response::redirect('welcome/index');
				}

				else
				{
					Session::set_flash('error', 'Could not save your email address. Please try again later.');
				}
			}
			else
			{
				Session::set_flash('error', ''.Input::post('fanemail').' is not a valid email. Please try again.');
			}
		}

		//$this->template->title = "Fans";
		//$this->template->content = View::forge(View::forge('welcome/index'));

		
		return Response::forge(View::forge('welcome/index'));
	}
	
	public function action_addFan()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Fan::validate('addFan');
			
			if ($val->run())
			{
				$fan = Model_Fan::forge(array(
					'fanemail' => Input::post('fanemail'),
				));

				if ($fan and $fan->save())
				{
					Session::set_flash('success', 'Added fan #'.$fan->id.'.');

					Response::redirect('fans');
				}

				else
				{
					Session::set_flash('error', 'Could not save fan.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Fans";
		$this->template->content = View::forge(View::forge('welcome/index'));

	}


	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(ViewModel::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
