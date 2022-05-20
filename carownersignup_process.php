<?php


if( isset($_POST['fn']) && isset($_POST['ln']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['addr']) && isset($_POST['car']) && isset($_POST['gender']) && !empty($_POST["pass"]) ){

	$fn = $_POST["fn"];
	$ln = $_POST["ln"];
	$email = $_POST["email"];
	$pass = md5($_POST["pass"]);
	$loc = $_POST["addr"];
	$car = $_POST["car"];
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];

	try {

		$dbcon = new PDO("mysql:host=localhost:3306;dbname=carparking;","root","");
		$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$quary = "INSERT INTO carowner(firstname, lastname, gender, email, pass, phone, car) VALUES('$fn','$ln','$gender','$email','$pass','$phone','$car')";
		echo $quary;

		
		
	} catch (PDOExpection $ex) {
		?>
				<script>window.location.assign('signup.php')</script>
		<?php
	}
	
}else{
		?>
			<script>window.location.assign('signup.php')</script>
		<?php
}
?>

