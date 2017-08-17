<?php
session_start();
if(!isset($_SESSION['username'])){
        // not logged in
    header('Location: index.php');
    exit();
}
?>
<?php 
$conn = new mysqli('fdb16.awardspace.net','2390315_smarthome','bobby@123', '2390315_smarthome');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM tbllogin where username = '".$_SESSION['username']."'");
if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		
       $imageData = $row["image"];
	
	}
	header("content-type: image/jpeg");
	
	
	echo $imageData;
	
	
}	else {
	//$filename = "large.jpg";
    echo "NOT FOUND";

}
$conn->close();
?>