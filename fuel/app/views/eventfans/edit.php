<h2>Editing <span class='muted'>EventFan</span></h2>
<br>

<?php echo render('eventfans/_form'); ?>
<p>
	<?php echo Html::anchor('eventfans/view/'.$eventFan->id, 'View'); ?> |
	<?php echo Html::anchor('eventfans', 'Back'); ?></p>
