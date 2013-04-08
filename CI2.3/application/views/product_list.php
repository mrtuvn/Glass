<?php
	echo $title;
	//var_dump($products);
	//echo $products;
	//echo $products->id . "this name is :" . $products->name; exit;
?>
	
	
	<ul class="product-grid odd">
	
		<?php if(!empty($products)):?>
		<?php foreach($products as $id => $product):?>
			<?php if(($id + 1)%3 == 0) $class ='item last'; else $class='item';?>
			<li class="<?php echo $class;?>">
				<a><img src="<?php echo base_url().$product['image']?>" alt="" title="image product" /></a>
				<h2><?php echo $product['name']?></h2>
				<div class="description">
					<?php echo $product['shortdesc'];?>
				</div>
				<div class="price">
					<label>PRICE:</label>
					<?php echo $product['price'];?>
				</div>
			</li>
		<?php endforeach;?>
		<?php endif;?>

	</ul>
	
	
	