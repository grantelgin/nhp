<h2>Viewing <span class='muted'>#<?php echo $supporter->id; ?></span></h2>

<p>
	<strong>Supporter id:</strong>
	<?php echo $supporter->supporter_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $supporter->name; ?></p>
<p>
	<strong>Desc:</strong>
	<?php echo $supporter->desc; ?></p>
<p>
	<strong>Graphic src:</strong>
	<?php echo $supporter->graphic_src; ?></p>
<p>
	<strong>Supporter link:</strong>
	<?php echo $supporter->supporter_link; ?></p>
<p>
	<strong>Contactname:</strong>
	<?php echo $supporter->contactname; ?></p>
<p>
	<strong>Contactemail:</strong>
	<?php echo $supporter->contactemail; ?></p>
<p>
	<strong>Contactphone:</strong>
	<?php echo $supporter->contactphone; ?></p>
<p>
	<strong>Contactaddress:</strong>
	<?php echo $supporter->contactaddress; ?></p>

<?php echo Html::anchor('supporters/edit/'.$supporter->id, 'Edit'); ?> |
<?php echo Html::anchor('supporters', 'Back'); ?>