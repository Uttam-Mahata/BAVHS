<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
			  session_start();
			 $_SESSION['Adminusername']=$_POST['adminname'];
			 $_SESSION['start'] = time();
       $_SESSION['expire'] = $_SESSION['start'] + (15*60);
				header("Location: admin_bavhs_cm_sys.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
