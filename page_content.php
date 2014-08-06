
<?php
require_once('include/bootstrap.php');
require_once('include/header.php');




$result = pages_get($_GET['id']);



?>
<div class="content">
	                   
	<div>
		<h2><?php echo $result['title'];?></a></h2>
		<br>
		<?php echo $result['content'];?></a>
	</div>
</div>

<?php
require_once('include/footer.php');