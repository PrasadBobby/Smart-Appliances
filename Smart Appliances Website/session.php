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
	while ($row = $result->fetch_assoc()) {
		
				echo '<div style="border: 1px solid #e4e4e4;margin-top: 10px; color:green;"';
		print "<strong style='color:green;'>".$row["username"]."</strong>";
		echo'</div>';
		
					echo '<div style="border: 1px solid #e4e4e4;margin-top: 10px; color:blue;"';
		print "<strong style='color:green;'>".$row["fullname"]."</strong>";
		echo'</div>';
		
		echo '<div style="border: 2px solid #e4e4e4; padding: 15px; margin-bottom: auto;"';
		
		//echo '<p>'.$row['username'].'</p>';
		
		//echo '<p>'. $row["username"].'</p>';
		
        echo '<p>Password: ';
		echo '</br>'. $row["password"].'</p> ';
		//echo '</br>'. $row["message_time"].'</p> ';
		
		
        echo '<p>Email: ';
		echo '</br>'. $row["email"].'</p> ';
		
        echo '<p>Phone Number: ';
		echo '</br>'. $row["phone"].'</p> ';
		echo'</div>';
	}
}	else {
    echo "NOT FOUND";

}
$conn->close();
?>