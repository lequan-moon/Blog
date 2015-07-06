<h2>Editing <span class='muted'>Blog</span></h2>
<br>

<?php echo render('blog/_form'); ?>
<p>
	<?php echo Html::anchor('admin/view/'.$blog->id, '<i class="fa fa-eye">View</i>'); ?> |
	<?php echo Html::anchor('admin', '<i class="fa fa-reply">Back</i>'); ?></p>
