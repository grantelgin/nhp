<h2>Editing <span class='muted'>Producer</span></h2>
<br>

<?php echo render('producers/_form'); ?>
<p>
	<?php echo Html::anchor('producers/view/'.$producer->id, 'View'); ?> |
	<?php echo Html::anchor('producers', 'Back'); ?></p>
