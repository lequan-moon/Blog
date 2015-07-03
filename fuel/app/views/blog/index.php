<!-- content -->
<div class="content">
	<div class="container">
	 <div class="load_more">	
	     <ul id="myList">
	        <!-- These are our grid blocks -->
	        <?php foreach ($grid as $gr): ?>
	        <li>
				<div class="l_g">
				    <?php foreach ($gr as $item): ?>
					<div class="col-md-3 integ">
						<div class="l_g_r">
							<div class="dapibus">
								<h2><?php echo $item->title; ?></h2>
								<p class="adm">Posted by <a href="#"><?php echo $item->authorName; ?></a></br>
								<?php echo date('Y-m-d', strtotime($item->created_at)); ?></p>
								<?php echo Html::anchor('blog/view/'.$item->id, Asset::img("$item->img", array('class' => 'img-responsive')));?>
								<p><?php echo $item->description; ?></p>
								<?php echo Html::anchor('blog/view/'.$item->id, '<i class="fa fa-eye"></i> View', array('class' => 'btn btn-small')); ?>
							</div>
						</div>
					</div>
				    <?php endforeach; ?>
				    <div class="clearfix"></div>
				  </div>
			  </li>
			  <?php endforeach; ?>
		  </ul>
		  <div id="loadMore">Load more</div>
		  <div id="showLess">Show less</div>
	  </div>
  </div>
</div>
