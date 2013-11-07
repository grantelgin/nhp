<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Supporter id', 'supporter_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('supporter_id', Input::post('supporter_id', isset($supporter) ? $supporter->supporter_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Supporter id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($supporter) ? $supporter->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Desc', 'desc', array('class'=>'control-label')); ?>

				<?php echo Form::input('desc', Input::post('desc', isset($supporter) ? $supporter->desc : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Desc')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Graphic src', 'graphic_src', array('class'=>'control-label')); ?>

				<?php echo Form::input('graphic_src', Input::post('graphic_src', isset($supporter) ? $supporter->graphic_src : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Graphic src')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Supporter link', 'supporter_link', array('class'=>'control-label')); ?>

				<?php echo Form::input('supporter_link', Input::post('supporter_link', isset($supporter) ? $supporter->supporter_link : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Supporter link')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contactname', 'contactname', array('class'=>'control-label')); ?>

				<?php echo Form::input('contactname', Input::post('contactname', isset($supporter) ? $supporter->contactname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contactemail', 'contactemail', array('class'=>'control-label')); ?>

				<?php echo Form::input('contactemail', Input::post('contactemail', isset($supporter) ? $supporter->contactemail : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactemail')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contactphone', 'contactphone', array('class'=>'control-label')); ?>

				<?php echo Form::input('contactphone', Input::post('contactphone', isset($supporter) ? $supporter->contactphone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactphone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contactaddress', 'contactaddress', array('class'=>'control-label')); ?>

				<?php echo Form::input('contactaddress', Input::post('contactaddress', isset($supporter) ? $supporter->contactaddress : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contactaddress')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>