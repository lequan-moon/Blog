<!-- content -->
<div class="content">
	<div class="container">
	 <div class="load_more">	
	     <ul id="myList">
	        <!-- These are our grid blocks -->
	        <li>
				<div class="l_g">
				  <?php foreach ($blogs as $item): ?>
					<div class="col-md-3 praesent">
						<div class="l_g_r">
							<div class="dapibus">
								<h2><?php echo $item->title; ?></h2>
								<p class="adm">Posted by <a href="#">Admin</a>  |  <?php echo $item->created_at; ?></p>
								<a href="details.html"><?php echo Asset::img("$item->img", array('class' => 'img-responsive'));?></a>
								<p><?php echo $item->description; ?></p>
								<?php echo Html::anchor('blog/view/'.$item->id, '<i class="fa fa-eye"></i> View', array('class' => 'btn btn-small')); ?>
							</div>
						</div>
					</div>
				  <?php endforeach; ?>
				  </div>
			  </li>
		  </ul>
	  </div>
  </div>
</div>
