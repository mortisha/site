<?php


require_once('include/bootstrap.php');
require_once('include/header.php');



$sql = 'SELECT * FROM news' ;
$result = db_select($sql);

?>
<section>

<?php foreach ($result as $key => $value) :?>
	<fieldset class="new">
	<h1><a href="newsd.php?id=<?=$value['id']?>"><?=$value['title']?></a></h1>
	<h6>Posted on <?=$value['date_added']?> </h6>
	<p><?=$value['content']?><p>
	<img src="admin/storage/<?php echo $value['image'] ?>">
</fieldset>
<?php endforeach; ?>
</section>

	

		
		
	
			