<h2>Listing <span class='muted'>Producers</span></h2>
<br>
<?php if ($producers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Producer id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Desc</th>
			<th>Address</th>
			<th>Graphic src</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($producers as $item): ?>		<tr>

			<td><?php echo $item->producer_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->phone; ?></td>
			<td><?php echo $item->desc; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->graphic_src; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('producers/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('producers/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('producers/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Producers.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('producers/create', 'Add new Producer', array('class' => 'btn btn-success')); ?>

</p>
