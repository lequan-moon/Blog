<h2>Editing <span class='muted'>Blog</span></h2>
<br>

<?php echo render('blog/_form'); ?>
<p>
	<?php echo Html::anchor('admin/view/'.$blog->id, 'View'); ?> |
	<?php echo Html::anchor('admin', 'Back'); ?></p>
