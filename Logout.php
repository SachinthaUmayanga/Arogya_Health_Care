<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arogya Health Care Hospital</title>
</head>

<body>
<?php
	if(isset($_SESSION['un'])){
		$conn=mysqli_connect('localhost','root','','hospital');
		
		if($conn){
			$id=$_SESSION['uid'];
			
			$queUp="UPDATE logsch SET LO=(now()) WHERE LogSerial='$id'";
			
			if(mysqli_query($conn,$queUp)){
				session_destroy();
				header("Location:loginform1.html");
			}
		}
		else{
			echo 'Error 303!<br>Database is NOT Connected!<br><a href="loginform1.html"></a>';
		}
	}
?>
</body>
</html>