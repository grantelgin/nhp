<?php
class Controller_Producers extends Controller_Template{

	public function action_index()
	{
		$data['producers'] = Model_Producer::find('all');
		$this->template->title = "Producers";
		$this->template->content = View::forge('producers/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('producers');

		if ( ! $data['producer'] = Model_Producer::find($id))
		{
			Session::set_flash('error', 'Could not find producer #'.$id);
			Response::redirect('producers');
		}

		$this->template->title = "Producer";
		$this->template->content = View::forge('producers/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Producer::validate('create');
			
			if ($val->run())
			{
				$producer = Model_Producer::forge(array(
					'producer_id' => Input::post('producer_id'),
					'name' => Input::post('name'),
					'email' => Input::post('email'),
					'phone' => Input::post('phone'),
					'desc' => Input::post('desc'),
					'address' => Input::post('address'),
					'graphic_src' => Input::post('graphic_src'),
				));

				if ($producer and $producer->save())
				{
					Session::set_flash('success', 'Added producer #'.$producer->id.'.');

					Response::redirect('producers');
				}

				else
				{
					Session::set_flash('error', 'Could not save producer.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Producers";
		$this->template->content = View::forge('producers/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('producers');

		if ( ! $producer = Model_Producer::find($id))
		{
			Session::set_flash('error', 'Could not find producer #'.$id);
			Response::redirect('producers');
		}

		$val = Model_Producer::validate('edit');

		if ($val->run())
		{
			$producer->producer_id = Input::post('producer_id');
			$producer->name = Input::post('name');
			$producer->email = Input::post('email');
			$producer->phone = Input::post('phone');
			$producer->desc = Input::post('desc');
			$producer->address = Input::post('address');
			$producer->graphic_src = Input::post('graphic_src');

			if ($producer->save())
			{
				Session::set_flash('success', 'Updated producer #' . $id);

				Response::redirect('producers');
			}

			else
			{
				Session::set_flash('error', 'Could not update producer #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$producer->producer_id = $val->validated('producer_id');
				$producer->name = $val->validated('name');
				$producer->email = $val->validated('email');
				$producer->phone = $val->validated('phone');
				$producer->desc = $val->validated('desc');
				$producer->address = $val->validated('address');
				$producer->graphic_src = $val->validated('graphic_src');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('producer', $producer, false);
		}

		$this->template->title = "Producers";
		$this->template->content = View::forge('producers/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('producers');

		if ($producer = Model_Producer::find($id))
		{
			$producer->delete();

			Session::set_flash('success', 'Deleted producer #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete producer #'.$id);
		}

		Response::redirect('producers');

	}


}
