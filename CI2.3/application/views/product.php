<?php 
echo "<h1>PRODUCT DETAILS</h1>" ;
?>


<div class="main-content">

	<div class="product-view">
	   
	   <div class="product-image">
	   		<img src="<?php echo base_url().$products['image']?>" alt="" title="<?php echo $products['name']?>" />
	   </div>
	   
	   <div class="product-shop">
	   			THIS IS DETAILS SECTION
	   			
	   			<div class="product-name">
					<h1><?php echo $products['name']?></h1>
				</div>
				
				<div class="price-box"><?php echo "$ ".$products['price']?></div>

				<div class="short-description"><?php echo $products['shortdesc']?></div>
	   
	   </div>
	   
	   <div class="clearfix"></div>
	   
	</div>
	<div class="clear"></div>
</div>