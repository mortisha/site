<?php
require_once('include/bootstrap.php');
require_once('include/header.php');

?>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	redirect('form_buy.php?id='.$_GET['id']);
}


//$product = products_get($_GET['id']);
$products = products_images_get_all($_GET['id']);

?>


<!--<?php   $sql = '
        SELECT products.id, images.product_id, image_name as img
        FROM images
        LEFT JOIN products ON products.id = images.product_id
        WHERE images.product_id = '.$_GET['id'] .'
        GROUP BY products.id '
    
        ;

    $result = db_select($sql); ?>
       
<img src="admin/products_images/<? Echo $result['img']?>" alt="" width="100">
-->

<?php
                $sql = '
                SELECT products.id as idd, products.title, products.price, products.content, images.image_name as img
                FROM products
                LEFT JOIN images ON products.id = images.product_id
                WHERE products.id = '.$_GET['id'].'
                GROUP BY products.id
                LIMIT 1

                ';
                $result = db_select($sql);
                ?>
                <section>
                <?php foreach($result as $key => $value){ ?>
                <div class="column">
                 <img id="img" src="admin/products_images/<?php echo $value['img']?>"/></a>
             </div>
      
                 
<div class="column">
<h2>Details about :<?=$value['title']?> </h2>
<p>Price:<?=$value['price']?></p> <br>
</div>
<form method="post" action="">
<button type="submit" id="buton">Buy It now</button>
</form>
<div class="spacer"></div>
<p>Short description:<?=$value['content']?> </p><br>
</section>
<?php } ?>


        <?php 
            foreach($products as $key=>$value) {
             
        ?>
                    
                        <img class = "column1" src="admin/products_images/<?=$value['image_name']?>" alt="" width="100">
              
                
        <?php } ?>
        </section>
