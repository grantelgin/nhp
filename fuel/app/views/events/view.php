<h2>Viewing <span class='muted'>#<?php echo $event->id; ?></span></h2>

<p>
	<strong>Event id:</strong>
	<?php echo $event->event_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $event->name; ?></p>
<p>
	<strong>Desc:</strong>
	<?php echo $event->desc; ?></p>
<p>
	<strong>Location id:</strong>
	<?php echo $event->location_id; ?></p>
<p>
	<strong>Eventbrite link:</strong>
	<?php echo $event->eventbrite_link; ?></p>
<p>
	<strong>Graphic src:</strong>
	<?php echo $event->graphic_src; ?></p>

<?php echo Html::anchor('events/edit/'.$event->id, 'Edit'); ?> |
<?php echo Html::anchor('events', 'Back'); ?>