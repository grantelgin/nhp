<h2>Viewing <span class='muted'>#<?php echo $eventFan->id; ?></span></h2>

<p>
	<strong>Eventfan id:</strong>
	<?php echo $eventFan->eventfan_id; ?></p>
<p>
	<strong>Event id:</strong>
	<?php echo $eventFan->event_id; ?></p>
<p>
	<strong>Fan id:</strong>
	<?php echo $eventFan->fan_id; ?></p>
<p>
	<strong>Updateviaemail:</strong>
	<?php echo $eventFan->updateviaemail; ?></p>
<p>
	<strong>Didattendevent:</strong>
	<?php echo $eventFan->didattendevent; ?></p>

<?php echo Html::anchor('eventfans/edit/'.$eventFan->id, 'Edit'); ?> |
<?php echo Html::anchor('eventfans', 'Back'); ?>