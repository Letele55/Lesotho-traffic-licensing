 <?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$full_name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['uid'];
	$Contact_No = $_POST['contactNo'];
	$Gender = $_POST['gender'];
	$password = sha1($_POST['pwd']);
	$cpassword = sha1($_POST['pwdrepeat']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql); 
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (Full_name,Email,Username,Contact_no,Gender,password)
					VALUES ('$full_name', '$email','$username','$Contact_No','$Gender','$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				
				$full_name = "";
				$email = "";
				$username = "";
				$Contact_No = "";
				$Gender = "";
				$_POST['pwd'] = "";
				$_POST['pwdrepeat'] = "";
				$_SESSION['email'] = $email;
				header("Location: user-login.php");
			} 
			else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
				echo "<script>location.href='user-register.php'</script>";
			}
		}
		
		else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
			echo "<script>location.href='user-register.php'</script>";
		}
	}	
	else {
		echo "<script>alert('Password Not Matched.')</script>";
		echo "<script>location.href='user-register.php'</script>";
	}
}
?>