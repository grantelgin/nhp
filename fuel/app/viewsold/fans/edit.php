<h2>Editing <span class='muted'>Fan</span></h2>
<br>

<?php echo render('fans/_form'); ?>
<p>
	<?php echo Html::anchor('fans/view/'.$fan->id, 'View'); ?> |
	<?php echo Html::anchor('fans', 'Back'); ?></p>
