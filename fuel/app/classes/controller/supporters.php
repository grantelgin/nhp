<?php
class Controller_Supporters extends Controller_Template{

	public function action_index()
	{
		$data['supporters'] = Model_Supporter::find('all');
		$this->template->title = "Supporters";
		$this->template->content = View::forge('supporters/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('supporters');

		if ( ! $data['supporter'] = Model_Supporter::find($id))
		{
			Session::set_flash('error', 'Could not find supporter #'.$id);
			Response::redirect('supporters');
		}

		$this->template->title = "Supporter";
		$this->template->content = View::forge('supporters/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Supporter::validate('create');
			
			if ($val->run())
			{
				$supporter = Model_Supporter::forge(array(
					'supporter_id' => Input::post('supporter_id'),
					'name' => Input::post('name'),
					'desc' => Input::post('desc'),
					'graphic_src' => Input::post('graphic_src'),
					'supporter_link' => Input::post('supporter_link'),
					'contactname' => Input::post('contactname'),
					'contactemail' => Input::post('contactemail'),
					'contactphone' => Input::post('contactphone'),
					'contactaddress' => Input::post('contactaddress'),
				));

				if ($supporter and $supporter->save())
				{
					Session::set_flash('success', 'Added supporter #'.$supporter->id.'.');

					Response::redirect('supporters');
				}

				else
				{
					Session::set_flash('error', 'Could not save supporter.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Supporters";
		$this->template->content = View::forge('supporters/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('supporters');

		if ( ! $supporter = Model_Supporter::find($id))
		{
			Session::set_flash('error', 'Could not find supporter #'.$id);
			Response::redirect('supporters');
		}

		$val = Model_Supporter::validate('edit');

		if ($val->run())
		{
			$supporter->supporter_id = Input::post('supporter_id');
			$supporter->name = Input::post('name');
			$supporter->desc = Input::post('desc');
			$supporter->graphic_src = Input::post('graphic_src');
			$supporter->supporter_link = Input::post('supporter_link');
			$supporter->contactname = Input::post('contactname');
			$supporter->contactemail = Input::post('contactemail');
			$supporter->contactphone = Input::post('contactphone');
			$supporter->contactaddress = Input::post('contactaddress');

			if ($supporter->save())
			{
				Session::set_flash('success', 'Updated supporter #' . $id);

				Response::redirect('supporters');
			}

			else
			{
				Session::set_flash('error', 'Could not update supporter #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$supporter->supporter_id = $val->validated('supporter_id');
				$supporter->name = $val->validated('name');
				$supporter->desc = $val->validated('desc');
				$supporter->graphic_src = $val->validated('graphic_src');
				$supporter->supporter_link = $val->validated('supporter_link');
				$supporter->contactname = $val->validated('contactname');
				$supporter->contactemail = $val->validated('contactemail');
				$supporter->contactphone = $val->validated('contactphone');
				$supporter->contactaddress = $val->validated('contactaddress');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('supporter', $supporter, false);
		}

		$this->template->title = "Supporters";
		$this->template->content = View::forge('supporters/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('supporters');

		if ($supporter = Model_Supporter::find($id))
		{
			$supporter->delete();

			Session::set_flash('success', 'Deleted supporter #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete supporter #'.$id);
		}

		Response::redirect('supporters');

	}


}
