<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Producer id', 'producer_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('producer_id', Input::post('producer_id', isset($producer) ? $producer->producer_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Producer id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($producer) ? $producer->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($producer) ? $producer->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Phone', 'phone', array('class'=>'control-label')); ?>

				<?php echo Form::input('phone', Input::post('phone', isset($producer) ? $producer->phone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Phone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Desc', 'desc', array('class'=>'control-label')); ?>

				<?php echo Form::input('desc', Input::post('desc', isset($producer) ? $producer->desc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Desc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($producer) ? $producer->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
		<input type="image" />
			<?php echo Form::label('Graphic src', 'graphic_src', array('class'=>'control-label')); ?>

				<?php echo Form::input('graphic_src', Input::post('graphic_src', isset($producer) ? $producer->graphic_src : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Graphic src')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>