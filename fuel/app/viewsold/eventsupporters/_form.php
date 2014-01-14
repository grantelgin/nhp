<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Eventsupporter id', 'eventsupporter_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('eventsupporter_id', Input::post('eventsupporter_id', isset($eventSupporter) ? $eventSupporter->eventsupporter_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Eventsupporter id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Event id', 'event_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('event_id', Input::post('event_id', isset($eventSupporter) ? $eventSupporter->event_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Event id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Supporter id', 'supporter_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('supporter_id', Input::post('supporter_id', isset($eventSupporter) ? $eventSupporter->supporter_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Supporter id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Showonevent', 'showonevent', array('class'=>'control-label')); ?>

				<?php echo Form::input('showonevent', Input::post('showonevent', isset($eventSupporter) ? $eventSupporter->showonevent : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Showonevent')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Eventposition', 'eventposition', array('class'=>'control-label')); ?>

				<?php echo Form::input('eventposition', Input::post('eventposition', isset($eventSupporter) ? $eventSupporter->eventposition : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Eventposition')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Updateviaemail', 'updateviaemail', array('class'=>'control-label')); ?>

				<?php echo Form::input('updateviaemail', Input::post('updateviaemail', isset($eventSupporter) ? $eventSupporter->updateviaemail : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Updateviaemail')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>