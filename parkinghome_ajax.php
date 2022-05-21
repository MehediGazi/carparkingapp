
<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "carparking");
$result = mysqli_query($conn, "SELECT * FROM parkingowner WHERE id = '$id'");

 
echo json_encode($data);
exit();