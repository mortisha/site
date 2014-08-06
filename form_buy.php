<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');



$products = products_get($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];



	$data = array(
		'name' => $name,
		'phone'=>$phone,
		'email' => $email,
		'date_added'=>date ('Y:m:d H:i:s'),
		'product_title'=>$products['title'],
		'product_price'=>$products['price']

		);
	db_insert ('orders',$data); 
	 redirect('order.php'); } //как се id на последния ред от таблицата orders ????

	  ?>




				
				<?php $product = products_get($_GET['id']); ?>
				<p>Купуване на: </p>
				<p><?php echo $product['title'] ?> с цена <?php echo $product['price'] ?></p>
			
					<div>
					<form method="post" action="">
						<label>Име:
						<input type="text" name="name" id="" value="">
						</label><br>
						
						<label>Email:
						<input type="text" name="email" id="" value="">
						</label><br>
						
						<label>Телефон:
						<input type="text" name="phone" id="" value="">
						</label><br>
						
						<button type="submit" >поръчай</button>
					</form>
					
					
				</div>

						</div>	
		</article>
	</section>
</body>
</html>