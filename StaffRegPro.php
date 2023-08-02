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
					$sid=$_SESSION['sid'];
					$fn=$_POST['txtFN'];
					$ln=$_POST['txtLN'];
					$sadd=$_POST['txtAdd'];
					$un=$_POST['txtUN'];
					$pw=$_POST['txtPW'];
					$gen=$_POST['radio'];
					$dob=$_POST['txtDOB'];
					$em=$_POST['txtEM'];
					$nic=$_POST['txtNIC'];
					$tel=$_POST['txtConNo'];
					$des=$_POST['txtDes'];
					$qul=$_POST['txtQul'];
						
					$queSave="INSERT INTO staff(StaffID,FName,LName,SAddress,Gender,DOB,Email,NIC,TelNo,Designation,Qualification)VALUES('$sid','$fn','$ln','$sadd','$gen','$dob','$em','$nic','$tel','$des','$qul')";
						
					if(mysqli_query($conn,$queSave)){
						echo '<p align="center">'.$_SESSION['sid'].'Successfully Save to the Database!</p>';
					}
					else{
						echo $_SESSION['pid'].'Not Save to the Database!'.mysqli_error($conn);
						}

					$queSave1="INSERT INTO users(UserName,Password,RealName)VALUES('$un','$pw','$fn.$ln')";

					if(mysqli_query($conn,$queSave1)){
						echo '<p align="center">'.$un. 'Successfully Save to the Database!<br><br><a href="StaffNumGen.php" class="btn btn-light btn-lg">Back</a></p>';
					}
					else{
						echo $un.'Not Save to the Database!'.mysqli_error($conn);
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