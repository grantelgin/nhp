<?php
class Controller_EventFans extends Controller_Template{

	public function action_index()
	{
		$data['eventFans'] = Model_EventFan::find('all');
		$this->template->title = "EventFans";
		$this->template->content = View::forge('eventfans/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('eventfans');

		if ( ! $data['eventFan'] = Model_EventFan::find($id))
		{
			Session::set_flash('error', 'Could not find eventFan #'.$id);
			Response::redirect('eventfans');
		}

		$this->template->title = "EventFan";
		$this->template->content = View::forge('eventfans/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_EventFan::validate('create');
			
			if ($val->run())
			{
				$eventFan = Model_EventFan::forge(array(
					'eventfan_id' => Input::post('eventfan_id'),
					'event_id' => Input::post('event_id'),
					'fan_id' => Input::post('fan_id'),
					'updateviaemail' => Input::post('updateviaemail'),
					'didattendevent' => Input::post('didattendevent'),
				));

				if ($eventFan and $eventFan->save())
				{
					Session::set_flash('success', 'Added eventFan #'.$eventFan->id.'.');

					Response::redirect('eventfans');
				}

				else
				{
					Session::set_flash('error', 'Could not save eventFan.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Eventfans";
		$this->template->content = View::forge('eventfans/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('eventfans');

		if ( ! $eventFan = Model_EventFan::find($id))
		{
			Session::set_flash('error', 'Could not find eventFan #'.$id);
			Response::redirect('eventfans');
		}

		$val = Model_EventFan::validate('edit');

		if ($val->run())
		{
			$eventFan->eventfan_id = Input::post('eventfan_id');
			$eventFan->event_id = Input::post('event_id');
			$eventFan->fan_id = Input::post('fan_id');
			$eventFan->updateviaemail = Input::post('updateviaemail');
			$eventFan->didattendevent = Input::post('didattendevent');

			if ($eventFan->save())
			{
				Session::set_flash('success', 'Updated eventFan #' . $id);

				Response::redirect('eventfans');
			}

			else
			{
				Session::set_flash('error', 'Could not update eventFan #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$eventFan->eventfan_id = $val->validated('eventfan_id');
				$eventFan->event_id = $val->validated('event_id');
				$eventFan->fan_id = $val->validated('fan_id');
				$eventFan->updateviaemail = $val->validated('updateviaemail');
				$eventFan->didattendevent = $val->validated('didattendevent');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('eventFan', $eventFan, false);
		}

		$this->template->title = "EventFans";
		$this->template->content = View::forge('eventfans/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('eventfans');

		if ($eventFan = Model_EventFan::find($id))
		{
			$eventFan->delete();

			Session::set_flash('success', 'Deleted eventFan #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete eventFan #'.$id);
		}

		Response::redirect('eventfans');

	}


}
