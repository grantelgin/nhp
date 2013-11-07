<h2>Listing <span class='muted'>Supporters</span></h2>
<br>
<?php if ($supporters): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Supporter id</th>
			<th>Name</th>
			<th>Desc</th>
			<th>Graphic src</th>
			<th>Supporter link</th>
			<th>Contactname</th>
			<th>Contactemail</th>
			<th>Contactphone</th>
			<th>Contactaddress</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($supporters as $item): ?>		<tr>

			<td><?php echo $item->supporter_id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->desc; ?></td>
			<td><?php echo $item->graphic_src; ?></td>
			<td><?php echo $item->supporter_link; ?></td>
			<td><?php echo $item->contactname; ?></td>
			<td><?php echo $item->contactemail; ?></td>
			<td><?php echo $item->contactphone; ?></td>
			<td><?php echo $item->contactaddress; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('supporters/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('supporters/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('supporters/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Supporters.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('supporters/create', 'Add new Supporter', array('class' => 'btn btn-success')); ?>

</p>
