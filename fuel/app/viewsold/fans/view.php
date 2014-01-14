<h2>Viewing <span class='muted'>#<?php echo $fan->id; ?></span></h2>

<p>
	<strong>Fan id:</strong>
	<?php echo $fan->fan_id; ?></p>
<p>
	<strong>Fanemail:</strong>
	<?php echo $fan->fanemail; ?></p>
<p>
	<strong>Fanfirstname:</strong>
	<?php echo $fan->fanfirstname; ?></p>
<p>
	<strong>Fanlastname:</strong>
	<?php echo $fan->fanlastname; ?></p>
<p>
	<strong>Fanphone:</strong>
	<?php echo $fan->fanphone; ?></p>
<p>
	<strong>Fanaddress:</strong>
	<?php echo $fan->fanaddress; ?></p>
<p>
	<strong>Fangraphic src:</strong>
	<?php echo $fan->fangraphic_src; ?></p>

<?php echo Html::anchor('fans/edit/'.$fan->id, 'Edit'); ?> |
<?php echo Html::anchor('fans', 'Back'); ?>