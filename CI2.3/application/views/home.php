
	
		
				<div id="jslidernews2" class="lof-slidecontent" style="width:900px; height:260px;">
						<div class="preload"><div></div></div>
							
							
							<div  class="button-previous">Previous</div>
								   
							 <!-- MAIN CONTENT --> 
							<div class="main-slider-content" style="width:684px; height:260px;">
								<ul class="sliders-wrap-inner">
										<li>
											<img src="<?php echo base_url()?>template/images/slide.jpg" title="Newsflash 2" >           
											 
										</li> 
										<li>
											<img src="<?php echo base_url()?>template/images/slide.jpg" title="Newsflash 1" >           
											 
										</li> 
										<li>
											<img src="<?php echo base_url()?>template/images/slide.jpg" title="Newsflash 3" >            
											
										</li> 
										<li>
											<img src="<?php echo base_url()?>template/images/slide.jpg" title="Newsflash 4" >            
											
										</li> 
										<li>
											<img src="<?php echo base_url()?>template/images/slide.jpg" title="Newsflash 5" >            
											
										</li> 
										<li>
											<img src="<?php echo base_url()?>template/images/slide.jpg" title="Newsflash 5" >            
											
										</li> 
								</ul>  	
							</div>
						   <!-- END MAIN CONTENT --> 
						   <!-- NAVIGATOR -->
							<div class="navigator-content">
								  <div class="navigator-wrapper">
										<ul class="navigator-wrap-inner">
											<li>
												<div>
													<img src="<?php echo base_url()?>template/images/thumb-girl.jpg" />
													<p> OAKLEY Sunglasses </p>
											
												</div>    
											</li>
											<li>
												<div>
													<img src="<?php echo base_url()?>template/images/thumb-boy.jpg" />
													<p> OAKLEY Sunglasses </p>
													
												</div>    
											</li>
								
											<li>
												<div>
													<img src="<?php echo base_url()?>template/images/thumb-girl.jpg" />
													<p> OAKLEY Sunglasses </p>
													
												</div>     
											</li>
											
											<li>
												<div>
													<img src="<?php echo base_url()?>template/images/thumb-boy.jpg" />
													<p> OAKLEY Sunglasses </p>
													
												</div>    
											</li>
											
											<li>
												<div>
													<img src="<?php echo base_url()?>template/images/thumb-girl.jpg" />
													<p> OAKLEY Sunglasses </p>
													
												</div>     
											</li>
											
											<li>
												<div>
													<img src="<?php echo base_url()?>template/images/thumb-girl.jpg" />
													<p> OAKLEY Sunglasses </p>
													
												</div>     
											</li>
											
										</ul>
								  </div>
				   
							</div> 
						  <!----------------- END OF NAVIGATOR --------------------->
						  <div class="button-next">Next</div>
			
						  <!-- <div class="button-control"><span></span></div> -->
					</div>	 
						   
				<div class="social-button">
					<div class="contain">
					<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="none">Tweet</a>
					<div class="g-plusone" data-size="medium" data-annotation="none" data-width="300"></div>
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=423794991011535" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
					</div>
				</div>
			
				<div class="best_sell">
					<div class="toolbar">
						<h2>TODAY'S BESTSELLING EYEWEAR</h2>
						<div class="clearfix"></div>
					</div>
					
					<?php if(!count($products)):?>
						<p class="note"><?php echo 'There are no product !'?></p>
						
					<?php endif;?>
					
					<?php $iterator = 0;?>
					<ul class="product-grid odd">
						<?php foreach ($products as $key => $value): ?> 
							<li class="item <?php if( ++$iterator == sizeof($products)): ?> last <?php endif;?>">
								<?php //images?>
								
								<a class="product-image" href="<?php echo base_url()."site/product/".$value['id']?>"><img src="<?php echo base_url().$value['image']?>" title="" alt="" /></a>
								<h3 class="product-name"><a href="<?php echo base_url()."site/product/".$value['id']?>"><?php echo $value['name']?></a></h3>
								<div class="price">
									<p>Price: <span>$ <?php echo $value['price']?></span></p>
								</div>
								<button class="order">
									<a>Order Now</a>
						
								</button>
								
							</li>
						<?php endforeach; ?>
						
					</ul>
					
					<div class="container clearfix" style="margin-top: 15px; padding:10px;">
							
							<?php echo $this->pagination->create_links();?>
								
					</div>
					
				</div>
			
				<div class="feature_collect clearfix">
					
					<div class="toolbar">
						<h2>FEATURED COLLECTIONS</h2>
						<div class="clearfix"></div>
					</div>
					
					<ul class="product-grid odd feature">
						<li class="item"><a class="product-image oakleysg"><img src="<?php echo base_url()?>template/images/oakleysg.jpg" /></a><span>OAKLEY SUNGLASSES</span></li>
						<li class="item"><a class="product-image raybansg"><img src="<?php echo base_url()?>template/images/raybansg.jpg" /></a><span>RAY-BAN SUNGLASSES</span></li>
						<li class="item"><a class="product-image oakleyeg"><img src="<?php echo base_url()?>template/images/oakleyeg.jpg" /></a><span>OAKLEY EYEGLASSES</span></li>
					</ul>
					
					<ul class="product-grid even feature">
						<li class="item"><a class="product-image raybanrxeg"><img src="<?php echo base_url()?>template/images/raybanrxeg.jpg" /></a><span>RAY-BAN RX EYEGLASSES</span></li>
						<li class="item"><a class="product-image raybansg2"><img src="<?php echo base_url()?>template/images/raybansg2.jpg" /></a><span>RAY-BAN SUNGLASSES</span></li>
						
					</ul>
				</div>
				
				<div class="clearfix"></div>
		
	
	
	
	