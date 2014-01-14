<h2>Editing <span class='muted'>EventSupporter</span></h2>
<br>

<?php echo render('eventsupporters/_form'); ?>
<p>
	<?php echo Html::anchor('eventsupporters/view/'.$eventSupporter->id, 'View'); ?> |
	<?php echo Html::anchor('eventsupporters', 'Back'); ?></p>
