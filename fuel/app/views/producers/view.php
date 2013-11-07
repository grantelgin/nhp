<h2>Viewing <span class='muted'>#<?php echo $producer->id; ?></span></h2>

<p>
	<strong>Producer id:</strong>
	<?php echo $producer->producer_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $producer->name; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $producer->email; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $producer->phone; ?></p>
<p>
	<strong>Desc:</strong>
	<?php echo $producer->desc; ?></p>
<p>
	<strong>Address:</strong>
	<?php echo $producer->address; ?></p>
<p>
	<strong>Graphic src:</strong>
	<?php echo $producer->graphic_src; ?></p>

<?php echo Html::anchor('producers/edit/'.$producer->id, 'Edit'); ?> |
<?php echo Html::anchor('producers', 'Back'); ?>