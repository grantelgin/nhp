<h2>Listing <span class='muted'>EventSupporters</span></h2>
<br>
<?php if ($eventSupporters): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Eventsupporter id</th>
			<th>Event id</th>
			<th>Supporter id</th>
			<th>Showonevent</th>
			<th>Eventposition</th>
			<th>Updateviaemail</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($eventSupporters as $item): ?>		<tr>

			<td><?php echo $item->eventsupporter_id; ?></td>
			<td><?php echo $item->event_id; ?></td>
			<td><?php echo $item->supporter_id; ?></td>
			<td><?php echo $item->showonevent; ?></td>
			<td><?php echo $item->eventposition; ?></td>
			<td><?php echo $item->updateviaemail; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('eventsupporters/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventsupporters/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventsupporters/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No EventSupporters.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('eventsupporters/create', 'Add new EventSupporter', array('class' => 'btn btn-success')); ?>

</p>
