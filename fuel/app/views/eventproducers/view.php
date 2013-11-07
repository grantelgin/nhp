<h2>Viewing <span class='muted'>#<?php echo $eventProducer->id; ?></span></h2>

<p>
	<strong>Eventproducer id:</strong>
	<?php echo $eventProducer->eventproducer_id; ?></p>
<p>
	<strong>Event id:</strong>
	<?php echo $eventProducer->event_id; ?></p>
<p>
	<strong>Producer id:</strong>
	<?php echo $eventProducer->producer_id; ?></p>
<p>
	<strong>Showonevent:</strong>
	<?php echo $eventProducer->showonevent; ?></p>
<p>
	<strong>Eventposition:</strong>
	<?php echo $eventProducer->eventposition; ?></p>
<p>
	<strong>Updateviaemail:</strong>
	<?php echo $eventProducer->updateviaemail; ?></p>
<p>
	<strong>Soundcloud link:</strong>
	<?php echo $eventProducer->soundcloud_link; ?></p>

<?php echo Html::anchor('eventproducers/edit/'.$eventProducer->id, 'Edit'); ?> |
<?php echo Html::anchor('eventproducers', 'Back'); ?>