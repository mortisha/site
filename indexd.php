<?php
require_once('include/header.php');
?>

<html>
<head>
	<link rel="stylesheet" href="stylesd.css">
</head>
<body>
		<section>
		<p>
			SMILES is the leading brand of children clothing, gifts and accessories in America, selling more than 10 products for every child born in the U.S. Our designs are based on a heritage of quality and innovation that has earned us the trust of generations of families.
		</p>
		<h3> PROMOTIONS </h3>

	<div class="column">
		<fieldset class="razmer">
			<figure>
				<img src="dress4.jpg" id="dress1">
				<figurecaption>
					<p>Gray Dress <br> 28 lv</p>
				</figurecaption>
			</figure>
		</fieldset>
		<br>
		<fieldset class="razmer">
			<figure>
				<img src="dress2.jpg" id="dress2">
				<figurecaption>
					<p>Pink Dress <br> 28 lv</p>
				</figurecaption>
			</figure>
		</fieldset>
	</div>
	<div class="column">
		<fieldset class="razmer">
			<figure>
				<img src="Shirt1.jpg" id="shirt1">
				<figurecaption>
					<p>Gray Shirt <br> 21 lv</p>
				</figurecaption>
			</figure>
		</fieldset>
		<br>
		<fieldset class="razmer">
			<figure>
				<img src="shirt2.jpg" id="shirt2">
				<figurecaption>
					<p>Denim Shirt <br> 28 lv</p>
				</figurecaption>
			</figure>
		</fieldset>
	</div>
	<div class="spacer"></div>
	
		<h2>Latest News!!!</h2>
		<?php
			$sql = 'SELECT * FROM news
					ORDER BY date_added
					LIMIT 3

			' ;
$result = db_select($sql);

?>
<section>

<?php foreach ($result as $key => $value) :?>
	<h1><a href="newsd.php?id=<?=$value['id']?>"><?=$value['title']?></a></h1>
	<p><?=$value['content']?><p><a href="Newsd.php?id=<?=$value['id']?>">Read more </a>

<?php endforeach; ?>
				
			
	</section>
<body>
</html>