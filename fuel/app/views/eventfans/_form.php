<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Eventfan id', 'eventfan_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('eventfan_id', Input::post('eventfan_id', isset($eventFan) ? $eventFan->eventfan_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Eventfan id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Event id', 'event_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('event_id', Input::post('event_id', isset($eventFan) ? $eventFan->event_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Event id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fan id', 'fan_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('fan_id', Input::post('fan_id', isset($eventFan) ? $eventFan->fan_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fan id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Updateviaemail', 'updateviaemail', array('class'=>'control-label')); ?>

				<?php echo Form::input('updateviaemail', Input::post('updateviaemail', isset($eventFan) ? $eventFan->updateviaemail : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Updateviaemail')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Didattendevent', 'didattendevent', array('class'=>'control-label')); ?>

				<?php echo Form::input('didattendevent', Input::post('didattendevent', isset($eventFan) ? $eventFan->didattendevent : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Didattendevent')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>