<?php
require_once('include/bootstrap.php'); 
require_once('include/header.php');


?>
	<section>

		<fieldset>
			<form action="" method="get">
			<label for="Search"></label>
			<input name="search" id="search" value ="search">
			<button type="submit" id="buton">Search</button>
	
			
			<select name="selectbox" id="selectbox">
			<option value="Order" selected="selected">OrderBy</option>
			<option value="Price">Price</option>
			<option value="ordered">Most Ordered</option>
			</select>
		</fieldset>

		<?php
				$sql = '
				SELECT products.id as idd, products.title, products.price, products.content, images.image_name as img
				FROM products
				LEFT JOIN images ON products.id = images.product_id
				GROUP BY products.id
				LIMIT 3

				';
				$result = db_select($sql);
				?>
				<?php foreach($result as $key => $value){ ?>
				<fieldset class="razmer">

				<a href="produkt.php?id=<?php echo $value['idd'];?>"><img class = "dress" id="img" src="admin/products_images/<?php echo $value['img']?>"/></a>
								
										<p>
											<?php echo $value['title'];?><br>
											<?php echo $value['price'];?>лв
											<div class="spacer"></div>
											<?php echo $value['content'];?>
										</p>
				</fieldset>
			<?php } ?>
				
				
	</section> 
