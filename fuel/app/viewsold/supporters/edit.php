<h2>Editing <span class='muted'>Supporter</span></h2>
<br>

<?php echo render('supporters/_form'); ?>
<p>
	<?php echo Html::anchor('supporters/view/'.$supporter->id, 'View'); ?> |
	<?php echo Html::anchor('supporters', 'Back'); ?></p>
