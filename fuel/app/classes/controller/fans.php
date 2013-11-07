<?php
class Controller_Fans extends Controller_Template{

	public function action_index()
	{
		$data['fans'] = Model_Fan::find('all');
		$this->template->title = "Fans";
		$this->template->content = View::forge('fans/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('fans');

		if ( ! $data['fan'] = Model_Fan::find($id))
		{
			Session::set_flash('error', 'Could not find fan #'.$id);
			Response::redirect('fans');
		}

		$this->template->title = "Fan";
		$this->template->content = View::forge('fans/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Fan::validate('create');
			
			if ($val->run())
			{
				$fan = Model_Fan::forge(array(
					'fan_id' => Input::post('fan_id'),
					'fanemail' => Input::post('fanemail'),
					'fanfirstname' => Input::post('fanfirstname'),
					'fanlastname' => Input::post('fanlastname'),
					'fanphone' => Input::post('fanphone'),
					'fanaddress' => Input::post('fanaddress'),
					'fangraphic_src' => Input::post('fangraphic_src'),
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
		$this->template->content = View::forge('fans/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('fans');

		if ( ! $fan = Model_Fan::find($id))
		{
			Session::set_flash('error', 'Could not find fan #'.$id);
			Response::redirect('fans');
		}

		$val = Model_Fan::validate('edit');

		if ($val->run())
		{
			$fan->fan_id = Input::post('fan_id');
			$fan->fanemail = Input::post('fanemail');
			$fan->fanfirstname = Input::post('fanfirstname');
			$fan->fanlastname = Input::post('fanlastname');
			$fan->fanphone = Input::post('fanphone');
			$fan->fanaddress = Input::post('fanaddress');
			$fan->fangraphic_src = Input::post('fangraphic_src');

			if ($fan->save())
			{
				Session::set_flash('success', 'Updated fan #' . $id);

				Response::redirect('fans');
			}

			else
			{
				Session::set_flash('error', 'Could not update fan #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$fan->fan_id = $val->validated('fan_id');
				$fan->fanemail = $val->validated('fanemail');
				$fan->fanfirstname = $val->validated('fanfirstname');
				$fan->fanlastname = $val->validated('fanlastname');
				$fan->fanphone = $val->validated('fanphone');
				$fan->fanaddress = $val->validated('fanaddress');
				$fan->fangraphic_src = $val->validated('fangraphic_src');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('fan', $fan, false);
		}

		$this->template->title = "Fans";
		$this->template->content = View::forge('fans/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('fans');

		if ($fan = Model_Fan::find($id))
		{
			$fan->delete();

			Session::set_flash('success', 'Deleted fan #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete fan #'.$id);
		}

		Response::redirect('fans');

	}


}
