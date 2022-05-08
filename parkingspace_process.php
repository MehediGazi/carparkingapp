<?php
    session_start();
    $ownerid = $_SESSION["id"];

	if( isset($_POST['district']) && isset($_POST['area']) && isset($_POST['road1']) && isset($_POST['road2']) && isset($_POST['house']) && isset($_POST['spacenum']) ){

		$district = $_POST["district"];
		$area = $_POST["area"];
		$road1 = $_POST["road1"];
		$road2 = $_POST["road2"];
		$house = $_POST["house"];
		$spacenum = $_POST["spacenum"];
		$img = $_POST["img"];

		try {

			$dbcon = new PDO("mysql:host=localhost:3306;dbname=carparking;","root","");
			$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$quary = "INSERT INTO parkingspace(ownerid, district, area, road1, road2, house, spacenum, img) VALUES('$ownerid','$district','$area','$road1','$road2','$house','$spacenum','$img')";
			echo $quary;

			try {
				
				$dbcon->exec($quary);
				?>
					<script>window.location.assign('home.php')</script>
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

