<h2>Listing <span class='muted'>Fans</span></h2>
<br>
<?php if ($fans): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Fan id</th>
			<th>Fanemail</th>
			<th>Fanfirstname</th>
			<th>Fanlastname</th>
			<th>Fanphone</th>
			<th>Fanaddress</th>
			<th>Fangraphic src</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($fans as $item): ?>		<tr>

			<td><?php echo $item->fan_id; ?></td>
			<td><?php echo $item->fanemail; ?></td>
			<td><?php echo $item->fanfirstname; ?></td>
			<td><?php echo $item->fanlastname; ?></td>
			<td><?php echo $item->fanphone; ?></td>
			<td><?php echo $item->fanaddress; ?></td>
			<td><?php echo $item->fangraphic_src; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('fans/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('fans/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('fans/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Fans.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('fans/create', 'Add new Fan', array('class' => 'btn btn-success')); ?>

</p>
