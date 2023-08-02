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
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="card-body p-md-5 text-black">
              <h3 class="mb-5 text-uppercase">Reservation</h3>
                <?php
                    $conn=mysqli_connect('localhost','root','','hospital');
                    $rm=$_GET['id'];
                    $_SESSION['rm']=$rm;
                    $queRoom="SELECT RoomType FROM rooms WHERE RoomNo='$rm'";
                    $res=mysqli_query($conn,$queRoom);
                    $res_Data=mysqli_fetch_assoc($res);
                ?>
                <table align="center" width="100%" cellpadding="5" cellspacing="0">
                    <tr>
                        <th colspan="2" bgcolor="#006666"><font color="#FFFFFF">ROOM DETAILS</font></th>
                    </tr>
                    <tr>
                        <td bgcolor="#006699"><font color="#FFFFFF">Room Number</font></td>
                        <td bgcolor="#006699"><font color="#FFFFFF">Room Type</font></td>
                    </tr>
                    <tr>
                        <td><?php echo $rm?></td>
                        <td><?php echo $res_Data['RoomType'];?></td>
                    </tr>
                    <?php
                        $queSel="SELECT PID,FName,LName FROM patient";
                        if(mysqli_query($conn,$queSel)){
                            $dataRes=mysqli_query($conn,$queSel);
                            if(mysqli_num_rows($dataRes)>0){
                                echo '<table width="100%" align="center" boarder="0" cellpadding="5" cellspacing="0">
                                    <tr>
                                        <th colspan="3" bgcolor="#006666"><font color="#FFFFFF">PATIENTS</font></th>
                                    </tr>
                                    <tr>
                                        <th bgcolor="#000066"><font color="#ffffff">Patient ID</font></th>
                                        <th bgcolor="#000066"><font color="#ffffff">Patient Name</font></th>
                                        <th bgcolor="#000066">&nbsp</th>
                                    </tr>';
                                    while($rowVal=mysqli_fetch_assoc($dataRes)){
                                        echo '<tr>
                                            <td>'.$rowVal['PID'].'</td>
                                            <td>'.$rowVal['FName'].' '.$rowVal['LName'].'</td>
                                            <td><a href="ResDone.php?PID='.$rowVal['PID'].'" class="btn btn-primary btn-lg">Reserve</a></td>
                                        </tr>';
                                    }
                                echo '</table>';
                            }
                        }
                    ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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