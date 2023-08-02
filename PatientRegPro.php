<?php
    session_start();
    if(isset($_SESSION['un'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Arogya Health Care Hospital</title>
  <link rel="icon" href="imgs/logo.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php include 'NavBar.php';?>
<?php include 'Header.php';?>

  <section class="h-100 bg-light">
    <form action="" method="POST">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
			<?php
				$conn=mysqli_connect('localhost','root','','hospital');
				if($conn){
					//echo'Database is Connected!';
					$pid=$_SESSION['pid'];
					$fn=$_POST['txtFN'];
					$ln=$_POST['txtLN'];
					$con=$_POST['txtConNo'];
					$nic=$_POST['txtNIC'];
					$gen=$_POST['radio'];
					$add=$_POST['txtAdd'];
					$dob=$_POST['txtDOB'];
					$email=$_POST['txtEM'];
					$mh=$_POST['txtMH'];
					$note=$_POST['txtNotes'];
						
					$queSave="INSERT INTO patient(PID,FName,LName,TelNo,NIC,Gender,PAddress,DOB,Email,MedicalHistory,Notes)VALUES('$pid','$fn','$ln','$con','$nic','$gen','$add','$dob','$email','$mh','$note')";
						
					if(mysqli_query($conn,$queSave)){
						echo '<p align="center">'.$_SESSION['pid'].' Successfully Save to the Database!<br><br><a href="PNumGen.php" class="btn btn-light btn-lg">Back</a></p>';
					}
					else{
						echo $_SESSION['pid'].'Not Save to the Database!'.mysqli_error($conn);
					}
				}
				else{
					echo'Error 303!<br>Database is NOT CONNECTED!<br><a href="loginform1.html">';
				}
			?>
            </div>
          </div>
        </div>
      </div>
    </form>
</section>

<?php include 'Footer.php';?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <?php
    }
  ?>
</body>
</html>