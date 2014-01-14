<h2>Listing <span class='muted'>Events</span></h2>
<br>
<?php if ($events): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Event id</th>
			<th>Name</th>
			<th>Desc</th>
			<th>Location id</th>
			<th>Eventbrite link</th>
			<th>Graphic src</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($events as $item): ?>		<tr>

			<td><?php echo $item->event_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->desc; ?></td>
			<td><?php echo $item->location_id; ?></td>
			<td><?php echo $item->eventbrite_link; ?></td>
			<td><?php echo $item->graphic_src; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('events/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('events/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('events/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Events.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('events/create', 'Add new Event', array('class' => 'btn btn-success')); ?>

</p>
