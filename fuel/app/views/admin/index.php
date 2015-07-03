<h2>Listing <span class='muted'>Blogs</span></h2>
<br>
<?php if ($blogs): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Content</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($blogs as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->content; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('admin/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('admin/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('admin/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Blogs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/create', 'Add new Blog', array('class' => 'btn btn-success')); ?>

</p>