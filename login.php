<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = sha1($_POST['pwd']);
	
	$sql = "SELECT * FROM users WHERE Email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		if($row['usertype']=='admin')
		{
			$_SESSION['email'] = $email;
			header("Location: Admin-Dashboard.php");
		}
		elseif($row['usertype']=='department')
		{
			$_SESSION['email'] = $email;
			header("Location: welcome_department.php");
		} 
		else{
			$_SESSION['email'] = $email;
			header("Location: Citizen.php");
		}
	
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		echo "<script>location.href='user-login.php'</script>"; 
	} 
}

?>