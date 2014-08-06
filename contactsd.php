
<?php
require_once('include/header.php');


require_once('include/bootstrap.php');
$contacts = new Contacts($db_connection);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['Ime'] != '' && $_POST['Email'] != '' && $_POST['phone'] != '') {

		$contact = new Contact();
		$contact->name = $_POST['Ime'];
		$contact->email = $_POST['Email'];
		$contact->phone = $_POST['phone'];
		$contact->comment = $_POST['comment'];
		$contacts->add($contact);

	}

	redirect('contactsd.php');
}
?> 

<html>

	<section>
		<h4>Adress </h4>
		<p>
			For online ordering and technical assistance:
			877-333-0117 (toll free)
			972-265-4128
			7am to 11pm CST daily (except holidays)
		</p>
		<div class = "column">
		<h2>Contact form </h2>
		<form action="" method="post">
			<div>
				<label for="name">Name</label>
				<input name="name" id="name" value="">
			</div>
			<br>
			<div>
				<label for="Email">Email</label>
				<input name="Email" id="email" value="">
			</div>
			<br>
			<div>
				<label for="phone">Telephone</label>
				<input name="phone" id="phone" value = "">
			</div>
			<br>
			<div>
				<p>Comment </p>
				<textarea name="comment" id="comment">
				</textarea>
			</div><br>
			<div>
				<button type="submit" id="buton">SEND</button>
			</div>
		</div>
		<div class="column">
			<div>
				<img src = "map.png" id="map">
			</div>
		</div>
	</section>
</body>
</html>


