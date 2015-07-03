<h2>Viewing <span class='muted'>#<?php echo $blog->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $blog->title; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $blog->description; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $blog->content; ?></p>

<?php echo Html::anchor('admin/edit/'.$blog->id, 'Edit'); ?> |
<?php echo Html::anchor('admin', 'Back'); ?>