<h2>Listing <span class='muted'>EventProducers</span></h2>
<br>
<?php if ($eventProducers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Eventproducer id</th>
			<th>Event id</th>
			<th>Producer id</th>
			<th>Showonevent</th>
			<th>Eventposition</th>
			<th>Updateviaemail</th>
			<th>Soundcloud link</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($eventProducers as $item): ?>		<tr>

			<td><?php echo $item->eventproducer_id; ?></td>
			<td><?php echo $item->event_id; ?></td>
			<td><?php echo $item->producer_id; ?></td>
			<td><?php echo $item->showonevent; ?></td>
			<td><?php echo $item->eventposition; ?></td>
			<td><?php echo $item->updateviaemail; ?></td>
			<td><?php echo $item->soundcloud_link; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('eventproducers/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventproducers/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventproducers/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No EventProducers.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('eventproducers/create', 'Add new EventProducer', array('class' => 'btn btn-success')); ?>

</p>
