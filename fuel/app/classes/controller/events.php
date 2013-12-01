<?php
class Controller_Events extends Controller_Template{

	public function action_index()
	{
		$data['events'] = Model_Event::find('all');
		$this->template->title = "Events";
		$this->template->content = View::forge('welcome/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('welcome');

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

					//Response::redirect('events/view/1');
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

		
		if ( ! $data['event'] = Model_Event::find($id))
		{
			Session::set_flash('error', 'Could not find event #'.$id);
			Response::redirect('welcome');
		}

		$this->template->title = "Event";
		$this->template->content = View::forge('events/view', $data);

	}
	
	public function action_rules()
	{
		$this->template->title = "Rules";
		$this->template->content = View::forge('events/rules');
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Event::validate('create');
			
			if ($val->run())
			{
				$event = Model_Event::forge(array(
					'event_id' => Input::post('event_id'),
					'name' => Input::post('name'),
					'desc' => Input::post('desc'),
					'location_id' => Input::post('location_id'),
					'eventbrite_link' => Input::post('eventbrite_link'),
					'graphic_src' => Input::post('graphic_src'),
				));

				if ($event and $event->save())
				{
					Session::set_flash('success', 'Added event #'.$event->id.'.');

					Response::redirect('events');
				}

				else
				{
					Session::set_flash('error', 'Could not save event.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Events";
		$this->template->content = View::forge('events/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('events');

		if ( ! $event = Model_Event::find($id))
		{
			Session::set_flash('error', 'Could not find event #'.$id);
			Response::redirect('events');
		}

		$val = Model_Event::validate('edit');

		if ($val->run())
		{
			$event->event_id = Input::post('event_id');
			$event->name = Input::post('name');
			$event->desc = Input::post('desc');
			$event->location_id = Input::post('location_id');
			$event->eventbrite_link = Input::post('eventbrite_link');
			$event->graphic_src = Input::post('graphic_src');

			if ($event->save())
			{
				Session::set_flash('success', 'Updated event #' . $id);

				Response::redirect('events');
			}

			else
			{
				Session::set_flash('error', 'Could not update event #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$event->event_id = $val->validated('event_id');
				$event->name = $val->validated('name');
				$event->desc = $val->validated('desc');
				$event->location_id = $val->validated('location_id');
				$event->eventbrite_link = $val->validated('eventbrite_link');
				$event->graphic_src = $val->validated('graphic_src');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('event', $event, false);
		}

		$this->template->title = "Events";
		$this->template->content = View::forge('events/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('events');

		if ($event = Model_Event::find($id))
		{
			$event->delete();

			Session::set_flash('success', 'Deleted event #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete event #'.$id);
		}

		Response::redirect('events');

	}


}
