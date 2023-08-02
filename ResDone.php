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
    <form action="DRegPro.php" method="POST">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
            <?php
                $conn=mysqli_connect('localhost','root','','hospital');
                $rn=$_SESSION['rm'];
                $pid=$_GET['PID'];
                $queSave="INSERT INTO roomres(RoomNo,PatientNo,ResDate) 
                VALUES('$rn','$pid',(now()))";
                if(mysqli_query($conn,$queSave)){
                    $queUpdate="UPDATE rooms SET Status='Reserve' WHERE RoomNo='$rn'";
                    mysqli_query($conn,$queUpdate);
                    echo '<p align="center">Room No.:'.$rn.' successfully reserved for Patient ID:'.$pid.'!<br><br><a href="Main.php" class="btn btn-light btn-lg">Back</a>';
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