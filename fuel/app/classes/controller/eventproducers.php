<?php
class Controller_EventProducers extends Controller_Template{

	public function action_index()
	{
		$data['eventProducers'] = Model_EventProducer::find('all');
		
		if (Input::method() == 'POST')
		{
			$val = Model_Producer::validate('create');
			
			if ($val->run())
			{
				$producer = Model_Producer::forge(array(
					/*
'producer_id' => Input::post('producer_id'),
					'name' => Input::post('name'),
*/
					'email' => Input::post('email'),
					/*
'phone' => Input::post('phone'),
					'desc' => Input::post('desc'),
					'address' => Input::post('address'),
					'graphic_src' => Input::post('graphic_src'),
*/
				));

				if ($producer and $producer->save())
				{
					Session::set_flash('success', 'We will send further instructions to '.$producer->email.' soon. ');

					Response::redirect('eventproducers/index');
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
		
		$this->template->title = "EventProducers";
		$this->template->content = View::forge('eventproducers/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('eventproducers');

		if ( ! $data['eventProducer'] = Model_EventProducer::find($id))
		{
			Session::set_flash('error', 'Could not find eventProducer #'.$id);
			Response::redirect('eventproducers');
		}

		$this->template->title = "EventProducer";
		$this->template->content = View::forge('eventproducers/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_EventProducer::validate('create');
			
			if ($val->run())
			{
				$eventProducer = Model_EventProducer::forge(array(
					'eventproducer_id' => Input::post('eventproducer_id'),
					'event_id' => Input::post('event_id'),
					'producer_id' => Input::post('producer_id'),
					'showonevent' => Input::post('showonevent'),
					'eventposition' => Input::post('eventposition'),
					'updateviaemail' => Input::post('updateviaemail'),
					'soundcloud_link' => Input::post('soundcloud_link'),
				));

				if ($eventProducer and $eventProducer->save())
				{
					Session::set_flash('success', 'Added eventProducer #'.$eventProducer->id.'.');

					Response::redirect('eventproducers');
				}

				else
				{
					Session::set_flash('error', 'Could not save eventProducer.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Eventproducers";
		$this->template->content = View::forge('eventproducers/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('eventproducers');

		if ( ! $eventProducer = Model_EventProducer::find($id))
		{
			Session::set_flash('error', 'Could not find eventProducer #'.$id);
			Response::redirect('eventproducers');
		}

		$val = Model_EventProducer::validate('edit');

		if ($val->run())
		{
			$eventProducer->eventproducer_id = Input::post('eventproducer_id');
			$eventProducer->event_id = Input::post('event_id');
			$eventProducer->producer_id = Input::post('producer_id');
			$eventProducer->showonevent = Input::post('showonevent');
			$eventProducer->eventposition = Input::post('eventposition');
			$eventProducer->updateviaemail = Input::post('updateviaemail');
			$eventProducer->soundcloud_link = Input::post('soundcloud_link');

			if ($eventProducer->save())
			{
				Session::set_flash('success', 'Updated eventProducer #' . $id);

				Response::redirect('eventproducers');
			}

			else
			{
				Session::set_flash('error', 'Could not update eventProducer #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$eventProducer->eventproducer_id = $val->validated('eventproducer_id');
				$eventProducer->event_id = $val->validated('event_id');
				$eventProducer->producer_id = $val->validated('producer_id');
				$eventProducer->showonevent = $val->validated('showonevent');
				$eventProducer->eventposition = $val->validated('eventposition');
				$eventProducer->updateviaemail = $val->validated('updateviaemail');
				$eventProducer->soundcloud_link = $val->validated('soundcloud_link');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('eventProducer', $eventProducer, false);
		}

		$this->template->title = "EventProducers";
		$this->template->content = View::forge('eventproducers/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('eventproducers');

		if ($eventProducer = Model_EventProducer::find($id))
		{
			$eventProducer->delete();

			Session::set_flash('success', 'Deleted eventProducer #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete eventProducer #'.$id);
		}

		Response::redirect('eventproducers');

	}


}
