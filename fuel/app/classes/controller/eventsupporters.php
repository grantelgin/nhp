<?php
class Controller_EventSupporters extends Controller_Template{

	public function action_index()
	{
		$data['eventSupporters'] = Model_EventSupporter::find('all');
		$this->template->title = "EventSupporters";
		$this->template->content = View::forge('eventsupporters/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('eventsupporters');

		if ( ! $data['eventSupporter'] = Model_EventSupporter::find($id))
		{
			Session::set_flash('error', 'Could not find eventSupporter #'.$id);
			Response::redirect('eventsupporters');
		}

		$this->template->title = "EventSupporter";
		$this->template->content = View::forge('eventsupporters/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_EventSupporter::validate('create');
			
			if ($val->run())
			{
				$eventSupporter = Model_EventSupporter::forge(array(
					'eventsupporter_id' => Input::post('eventsupporter_id'),
					'event_id' => Input::post('event_id'),
					'supporter_id' => Input::post('supporter_id'),
					'showonevent' => Input::post('showonevent'),
					'eventposition' => Input::post('eventposition'),
					'updateviaemail' => Input::post('updateviaemail'),
				));

				if ($eventSupporter and $eventSupporter->save())
				{
					Session::set_flash('success', 'Added eventSupporter #'.$eventSupporter->id.'.');

					Response::redirect('eventsupporters');
				}

				else
				{
					Session::set_flash('error', 'Could not save eventSupporter.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Eventsupporters";
		$this->template->content = View::forge('eventsupporters/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('eventsupporters');

		if ( ! $eventSupporter = Model_EventSupporter::find($id))
		{
			Session::set_flash('error', 'Could not find eventSupporter #'.$id);
			Response::redirect('eventsupporters');
		}

		$val = Model_EventSupporter::validate('edit');

		if ($val->run())
		{
			$eventSupporter->eventsupporter_id = Input::post('eventsupporter_id');
			$eventSupporter->event_id = Input::post('event_id');
			$eventSupporter->supporter_id = Input::post('supporter_id');
			$eventSupporter->showonevent = Input::post('showonevent');
			$eventSupporter->eventposition = Input::post('eventposition');
			$eventSupporter->updateviaemail = Input::post('updateviaemail');

			if ($eventSupporter->save())
			{
				Session::set_flash('success', 'Updated eventSupporter #' . $id);

				Response::redirect('eventsupporters');
			}

			else
			{
				Session::set_flash('error', 'Could not update eventSupporter #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$eventSupporter->eventsupporter_id = $val->validated('eventsupporter_id');
				$eventSupporter->event_id = $val->validated('event_id');
				$eventSupporter->supporter_id = $val->validated('supporter_id');
				$eventSupporter->showonevent = $val->validated('showonevent');
				$eventSupporter->eventposition = $val->validated('eventposition');
				$eventSupporter->updateviaemail = $val->validated('updateviaemail');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('eventSupporter', $eventSupporter, false);
		}

		$this->template->title = "EventSupporters";
		$this->template->content = View::forge('eventsupporters/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('eventsupporters');

		if ($eventSupporter = Model_EventSupporter::find($id))
		{
			$eventSupporter->delete();

			Session::set_flash('success', 'Deleted eventSupporter #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete eventSupporter #'.$id);
		}

		Response::redirect('eventsupporters');

	}


}
