<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Event id', 'event_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('event_id', Input::post('event_id', isset($event) ? $event->event_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Event id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($event) ? $event->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Desc', 'desc', array('class'=>'control-label')); ?>

				<?php echo Form::input('desc', Input::post('desc', isset($event) ? $event->desc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Desc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Location id', 'location_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('location_id', Input::post('location_id', isset($event) ? $event->location_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Location id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Eventbrite link', 'eventbrite_link', array('class'=>'control-label')); ?>

				<?php echo Form::input('eventbrite_link', Input::post('eventbrite_link', isset($event) ? $event->eventbrite_link : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Eventbrite link')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Graphic src', 'graphic_src', array('class'=>'control-label')); ?>

				<?php echo Form::input('graphic_src', Input::post('graphic_src', isset($event) ? $event->graphic_src : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Graphic src')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>