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

	
?>

