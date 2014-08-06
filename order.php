<?php
require_once('include/bootstrap.php');
require_once('include/header.php');



$buy = get_alls($_GET['id']); ?>

<h2>БЛАГОДАРЯ </h2>

<p>Вие поръчахте: </p>

<?php foreach ($buy as $key =>$value) { ?>

	<?php Echo $value['product_title']; ?>

<p> За потвърждение, моля изпратете <p>
<p><?php Echo $value['product_price'];?> лв</p> 
<p>на IBAN BG95UNCR88554466999 с референция <?php Echo $value['id'] ?><p>





<br>

<?php } ?>
