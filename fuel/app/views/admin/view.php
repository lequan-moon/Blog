<div class="main-content">
    <h2><?php echo $blog->title; ?></h2>

    <div id="post-description">
    	<?php echo $blog->description; ?>
    </div>
    <div class="clearfix"></div>
    <div id="post-content">
    	<?php echo $blog->content; ?>
    </div>
    <div class="clearfix"></div>
</div>

<?php echo Html::anchor('admin/edit/'.$blog->id, '<i class="fa fa-pencil-square-o">Edit</i>'); ?> |
<?php echo Html::anchor('admin', '<i class="fa fa-reply">Back</i>'); ?>
