<?php
require_once('include/bootstrap.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = $_POST['name'];
	$content = $_POST['comm'];

	$data = array(
		'name' => $name,
		'content'=>$content,
		'date_added'=>date ('Y:m:d H:i:s'),
		'news_id'=>$_GET['id']

		);
	db_insert ('comments',$data);
}

$sql = 'SELECT * FROM news';
if (isset($_GET['id'])){
	$num = $_GET['id'];
} else {
	$num=1;
}
$result = news_get($num);
$comments = news_comments_get_all($num);

require_once('include/header.php');
?>

<section >
		<fieldset class="new"
		<h1><?= $result['title']?></h1>
		<p>Posted on <?= $result['date_added']?> </p>
		<img src="admin/storage/<?php echo $result['image'] ?>" >
		<p>
			<?= $result['content']?>
		</p>
	</fieldset>

	<fieldset>
<?php foreach ($comments as $key => $value) : ?>
	<h2> Comments </h2>
	<h6> Posted on <?=$value['date_added']?> By <?=$value['name']?> </h6>
	<blockquote><?=$value['content'] ?> </blockquote>
<?php endforeach; ?>
	</fieldset>
</section>

<section>
	<legend>Leave your comment</legend>
		<div>
			<form action="?id=<?=$result['id'] ?>" method="post">
			<label for="name">Name</label>
			<input name="name" id="name" value="">
		</div>
		<br>
				<div class="column2">
			<p>Comment</p>
		</div>
		<div class="column2" id="commm">
			<textarea name="comm" id="comm">
			</textarea>
		</div>
		<br>
		<div class="spacer"></div>
		<div>
		<p><button type="submit">Send</button></p>
		</div>
		</form> 
</section>