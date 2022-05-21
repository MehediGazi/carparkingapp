<?php
    session_start();
    $ownerid = $_SESSION["id"];
    $spotid = $_SESSION['spotid'];

	if( isset($_POST['area']) && isset($_POST['road1']) && isset($_POST['road2']) && isset($_POST['house']) && isset($_POST['spacenum']) ){

		$area = $_POST["area"];
		$road1 = $_POST["road1"];
		$road2 = $_POST["road2"];
		$house = $_POST["house"];
		$spacenum = $_POST["spacenum"];
		$rent = $_POST["rent"];

		 

		 
	}else{
			?>
				<script>window.location.assign('signup3.php')</script>
			<?php
	}
?>

