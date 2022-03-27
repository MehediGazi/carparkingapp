<?php


	if( isset($_POST['fn']) && isset($_POST['ln']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['addr']) && isset($_POST['car']) && isset($_POST['gender']) && !empty($_POST["pass"]) ){

		$fn = $_POST["fn"];
		$ln = $_POST["ln"];
		$email = $_POST["email"];
		$phone = md5($_POST["phone"]);
		$addr = $_POST["addr"];
		$car = $_POST["car"];
		$gender = $_POST["gender"];
		$pass = $_POST["pass"];

		try {

			$dbcon = new PDO("mysql:host=localhost:3306;dbname=carparking;","root","");
			$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$quary = "INSERT INTO carowner(firstname, lastname, gender, email, pass, phone, car, loc) VALUES('$fn','$ln','$gender','$email','$pass','$phone','$car, '$addr')	";
			echo $quary;

			try {
				
				$dbcon->exec($quary);

				?>
					<script>window.location.assign('login.php')</script>
				<?php
			} catch (PDOExpection $ex) {
				?>
					<script>window.location.assign('signup.php')</script>
				<?php
			}
			
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

