<h2>Listing <span class='muted'>EventFans</span></h2>
<br>
<?php if ($eventFans): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Eventfan id</th>
			<th>Event id</th>
			<th>Fan id</th>
			<th>Updateviaemail</th>
			<th>Didattendevent</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($eventFans as $item): ?>		<tr>

			<td><?php echo $item->eventfan_id; ?></td>
			<td><?php echo $item->event_id; ?></td>
			<td><?php echo $item->fan_id; ?></td>
			<td><?php echo $item->updateviaemail; ?></td>
			<td><?php echo $item->didattendevent; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('eventfans/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventfans/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventfans/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No EventFans.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('eventfans/create', 'Add new EventFan', array('class' => 'btn btn-success')); ?>

</p>
