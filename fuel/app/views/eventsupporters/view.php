<h2>Viewing <span class='muted'>#<?php echo $eventSupporter->id; ?></span></h2>

<p>
	<strong>Eventsupporter id:</strong>
	<?php echo $eventSupporter->eventsupporter_id; ?></p>
<p>
	<strong>Event id:</strong>
	<?php echo $eventSupporter->event_id; ?></p>
<p>
	<strong>Supporter id:</strong>
	<?php echo $eventSupporter->supporter_id; ?></p>
<p>
	<strong>Showonevent:</strong>
	<?php echo $eventSupporter->showonevent; ?></p>
<p>
	<strong>Eventposition:</strong>
	<?php echo $eventSupporter->eventposition; ?></p>
<p>
	<strong>Updateviaemail:</strong>
	<?php echo $eventSupporter->updateviaemail; ?></p>

<?php echo Html::anchor('eventsupporters/edit/'.$eventSupporter->id, 'Edit'); ?> |
<?php echo Html::anchor('eventsupporters', 'Back'); ?>