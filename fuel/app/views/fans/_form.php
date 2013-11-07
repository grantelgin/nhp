<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Fan id', 'fan_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('fan_id', Input::post('fan_id', isset($fan) ? $fan->fan_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fan id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fanemail', 'fanemail', array('class'=>'control-label')); ?>

				<?php echo Form::input('fanemail', Input::post('fanemail', isset($fan) ? $fan->fanemail : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fanemail')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fanfirstname', 'fanfirstname', array('class'=>'control-label')); ?>

				<?php echo Form::input('fanfirstname', Input::post('fanfirstname', isset($fan) ? $fan->fanfirstname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fanfirstname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fanlastname', 'fanlastname', array('class'=>'control-label')); ?>

				<?php echo Form::input('fanlastname', Input::post('fanlastname', isset($fan) ? $fan->fanlastname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fanlastname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fanphone', 'fanphone', array('class'=>'control-label')); ?>

				<?php echo Form::input('fanphone', Input::post('fanphone', isset($fan) ? $fan->fanphone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fanphone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fanaddress', 'fanaddress', array('class'=>'control-label')); ?>

				<?php echo Form::input('fanaddress', Input::post('fanaddress', isset($fan) ? $fan->fanaddress : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fanaddress')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fangraphic src', 'fangraphic_src', array('class'=>'control-label')); ?>

				<?php echo Form::input('fangraphic_src', Input::post('fangraphic_src', isset($fan) ? $fan->fangraphic_src : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fangraphic src')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>