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
					$did=$_SESSION['did'];
					$fn=$_POST['txtFN'];
					$ln=$_POST['txtLN'];
					$con=$_POST['txtConNo'];
					$nic=$_POST['txtNIC'];
					$add=$_POST['txtAdd'];
					$gen=$_POST['radio'];
					$dob=$_POST['txtDOB'];
					$email=$_POST['txtEM'];
					$proinf=$_POST['txtPI'];
					$ex=$_POST['txtEx'];
						
					$queSave="INSERT INTO doctor(DocID,FName,LName,ConNo,NIC,DAdd,Gen,DOB,Email,ProInformation,Experience)VALUES('$did','$fn','$ln','$con','$nic','$add','$gen','$dob','$email','$proinf','$ex')";
						
					if(mysqli_query($conn,$queSave)){
						echo '<p align="center">'.$_SESSION['did'].' Successfully Save to the Database!<br><br><a href="DNumGen.php" class="btn btn-light btn-lg">Back</a></p>';
					}
					else{
						echo $_SESSION['did'].'Not Save to the Database!'.mysqli_error($conn);
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