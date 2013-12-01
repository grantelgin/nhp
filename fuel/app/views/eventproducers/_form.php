<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<!--
<div class="form-group">
			<?php echo Form::label('Eventproducer id', 'eventproducer_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('eventproducer_id', Input::post('eventproducer_id', isset($eventProducer) ? $eventProducer->eventproducer_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Eventproducer id')); ?>

		</div>
-->
		<div class="form-group">
			<?php echo Form::label('Event id', 'event_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('event_id', Input::post('event_id', isset($eventProducer) ? $eventProducer->event_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Event id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Producer id', 'producer_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('producer_id', Input::post('producer_id', isset($eventProducer) ? $eventProducer->producer_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Producer id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Showonevent', 'showonevent', array('class'=>'control-label')); ?>

				<?php echo Form::input('showonevent', Input::post('showonevent', isset($eventProducer) ? $eventProducer->showonevent : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Showonevent')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Eventposition', 'eventposition', array('class'=>'control-label')); ?>

				<?php echo Form::input('eventposition', Input::post('eventposition', isset($eventProducer) ? $eventProducer->eventposition : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Eventposition')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Updateviaemail', 'updateviaemail', array('class'=>'control-label')); ?>

				<?php echo Form::input('updateviaemail', Input::post('updateviaemail', isset($eventProducer) ? $eventProducer->updateviaemail : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Updateviaemail')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Soundcloud link', 'soundcloud_link', array('class'=>'control-label')); ?>

				<?php echo Form::input('soundcloud_link', Input::post('soundcloud_link', isset($eventProducer) ? $eventProducer->soundcloud_link : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Soundcloud link')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>